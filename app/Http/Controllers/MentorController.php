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
        $mentor = Mentor::paginate(5);

        $bidang = Bidang:: all();

        return view("admin.mentor.index", compact('mentor', 'bidang'));
    }

    public function create()
    {
        // $mentor = mentor::all();
        // $model1 = new mentor();
        // $dosen = Dosen::all();
        // $model2 = new Dosen();
        // return view("admin.mentor.create", compact('mentor'));
        return view("admin.mentor.create");
    }

    public function show(string $NRP)
    {
        $mentor = mentor::where('NRP', $NRP)->first();
        // $dosen = Dosen::all();
        return view("admin.mentor.view", compact('mentor', 'dosen'));
    }
    public function edit(mentor $mentor)
    {
        // $dosenWali = Dosen::all();
        return view("admin.mentor.update", compact('mentor', 'dosenWali'));
    }

    public function destroy($NRP)
    {
        $mentor = mentor::find($NRP);

        if (!$mentor) {
            return redirect()->route('admin.mentor.index')->with('error', 'mentor tidak ditemukan!');
        }

        $mentor->delete();

        return redirect()->route('admin.mentor.index')->with('success', 'mentor berhasil dihapus!');
    }

    public function store(Request $request)
    {
        // 'ptn' = (int)$request;
        $this->validate($request, [
            'namamentor' => 'required|max:5|string',
            'pendidikan' => 'required|string',
            'ptn' => 'required|string',
            'idbidang' => 'required|int',
        ]);

        try {
            $data = [
                'namamentor' => $request->input('namamentor'),
                'pendidikan' => $request->input('pendidikan'),
                'ptn' => $request->input('ptn'),
                'idbidang' => $request->input('idbidang'),
            ];
            // var_dump($data);die;
            Mentor::create($data);
    
            return redirect()->route('mentor.index')->with('success', 'mentor berhasil ditambah!');
        } catch (\Exception $e) {
            return redirect()->route('mentor.index')->with('error', 'Gagal input mentor. Pastikan data yang Anda masukkan benar.');
            // return redirect()->route('mentor.index')->with('error', 'Gagal input mentor. Pastikan data yang Anda masukkan benar.');
        }
    }

    public function update(Request $request, mentor $mentor)
    {
        $this->validate($request, [
            'NamaMhs' => 'required|string',
            'Alamat' => 'required|string',
            'IDDosen' => 'required|max:5|string',
            'IPK' => 'required|numeric|max:4|min:0',
            'JenisKelamin' => 'required|string',
        ], [
            'IPK.max' => 'IPK harus kurang dari atau sama dengan :max.',
            'IPK.min' => 'IPK harus lebih dari atau sama dengan :min.',
        ]);

        $mentor->update($request->all());

        return redirect()->route('admin.mentor.index')->with('success', 'mentor berhasil diperbarui!');

    }

}
