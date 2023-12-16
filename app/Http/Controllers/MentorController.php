<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Illuminate\Http\Request;
use App\Models\Mentor;
use Illuminate\Support\Facades\Auth;

class MentorController extends Controller
{

    public function dashboard()
    {

        $user = Auth::user();
        return view("mentor.dashboard", compact('user'));
    }

    public function mataPelajaran()
    {

        $user = Auth::user();
        return view("mentor.matapelajaran", compact('user'));
    }

    public function index()
    {
        $mentor = Mentor::with('bidang')->paginate(5);

        $bidang = Bidang::all();

        return view("admin.mentor.index", compact('mentor', 'bidang'));
    }

    public function create()
    {
        $mentor = Mentor::all();
        $model1 = new Mentor();
        return view("admin.mentor.create", compact('mentor', 'model1'));
    }

    public function show(string $idmentor)
    {
        $mentor = Mentor::where('idmentor', $idmentor)->with('bidang')->first();
        return view("admin.mentor.view", compact('mentor'));
    }
    public function edit($id)
    {
        $mentor = Mentor::find($id);
        $bidang = Bidang::all();
        return view("admin.mentor.update", compact('mentor', 'bidang'));
    }

    public function destroy($idmentor)
    {
        $mentor = Mentor::find($idmentor);

        if (!$mentor) {
            return redirect()->route('mentor.index')->with('error', 'Mentor tidak ditemukan!');
        }

        if ($mentor->foto_profil) {
            unlink(public_path($mentor->foto_profil));
        }

        $mentor->delete();

        return redirect()->route('mentor.index')->with('success', 'Mentor berhasil dihapus!');
    }

    public function store(Request $request)
    {
        $request['idbidang'] = intval($request['idbidang']);

        $this->validate($request, [
            'namamentor' => 'required|string',
            'foto_profil' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pendidikan' => 'required|string',
            'ptn' => 'required|string',
            'idbidang' => 'required|integer',
        ]);

        try {
            $input = $request->all();

            if ($foto_profil = $request->file('foto_profil')) {
                $destinationPath = 'uploads/mentor/';
                $profileImage = "mentor" . "-" . date('YmdHis') . "." . $foto_profil->getClientOriginalExtension();
                $foto_profil->move($destinationPath, $profileImage);
                $input['foto_profil'] = "$profileImage";
            }

            Mentor::create($input);

            return redirect()->route('mentor.index')->with('success', 'mentor berhasil ditambah!');
        } catch (\Exception $e) {
            return redirect()->route('mentor.create')->with('error', 'Gagal input mentor. Pastikan data yang Anda masukkan benar.');
        }
    }

    public function update(Request $request, Mentor $mentor)
    {
        $request['idbidang'] = intval($request['idbidang']);

        $request->validate([
            'namamentor' => 'required|string',
            'foto_profil' => 'image|mimes:jpeg,jpg,png|max:2048',
            'pendidikan' => 'required|string',
            'ptn' => 'required|string',
            'idbidang' => 'required|integer',
        ]);

        $input = $request->all();

        if ($foto_profil = $request->file('foto_profil')) {
            $previousImage = $mentor->foto_profil;
            if ($previousImage && file_exists(public_path('uploads/mentor/' . $previousImage))) {
                unlink(public_path('uploads/mentor/' . $previousImage));
            }
    
            $destinationPath = 'uploads/mentor';
            $profileImage = "mentor" . "-" . date('YmdHis') . "." . $foto_profil->getClientOriginalExtension();
            $foto_profil->move($destinationPath, $profileImage);
            $input['foto_profil'] = $profileImage;
        } else {
            unset($input['foto_profil']);
        }

        $mentor->update($input);

        return redirect()->route('mentor.index')
            ->with('success', 'Mentor updated successfully');
    }

}
