<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Illuminate\Http\Request;
use App\Models\Mentor;
use App\Models\Dosen;
class MentorController extends Controller
{
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
        return view("admin.mentor.create", compact('mentor','model1'));
    }

    public function show(string $idmentor)
    {
        $mentor = Mentor::where('idmentor', $idmentor)->with('bidang')->first();
        return view("admin.mentor.view", compact('mentor'));
    }
    public function edit(Mentor $mentor)
    {
        $bidang = Bidang::all();
        return view("admin.mentor.update", compact('mentor', 'bidang'));
    }

    public function destroy($idmentor)
    {
        $mentor = Mentor::find($idmentor);

        if (!$mentor) {
            return redirect()->route('mentor.index')->with('error', 'Mentor tidak ditemukan!');
        }

        $mentor->delete();

        return redirect()->route('mentor.index')->with('success', 'Mentor berhasil dihapus!');
    }

    public function store(Request $request)
    {
        $request['idbidang'] = intval($request['idbidang']);

        $this->validate($request, [
            'namamentor' => 'required|string',
            'pendidikan' => 'required|string',
            'ptn' => 'required|string',
            'idbidang' => 'required|integer',
        ]);

        try {
            $data = [
                'namamentor' => $request->input('namamentor'),
                'pendidikan' => $request->input('pendidikan'),
                'ptn' => $request->input('ptn'),
                'idbidang' => $request->input('idbidang'),
            ];
            Mentor::create($data);
    
            return redirect()->route('mentor.index')->with('success', 'mentor berhasil ditambah!');
        } catch (\Exception $e) {
            return redirect()->route('mentor.create')->with('error', 'Gagal input mentor. Pastikan data yang Anda masukkan benar.');
        }
    }

    public function update(Request $request, Mentor $mentor)
    {
        $request['idbidang'] = intval($request['idbidang']);

        $this->validate($request, [
            'namamentor' => 'required|string',
            'pendidikan' => 'required|string',
            'ptn' => 'required|string',
            'idbidang' => 'required|integer',
        ]);

        $mentor->update($request->all());

        return redirect()->route('mentor.index')->with('success', 'Mentor berhasil diperbarui!');

    }

}
