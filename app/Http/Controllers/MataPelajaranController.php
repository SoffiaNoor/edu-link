<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Bidang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MataPelajaranController extends Controller
{
    public function index()
    {
        $mapel = Mapel::with('bidang')->paginate(5);

        $bidang = Bidang::all();

        // return view("mata_pelajaran.index", compact('mataKuliah'));
        return view("admin.mata_pelajaran.index", compact('mapel', 'bidang'));
    }
    public function create()
    {
        $mapel = Mapel::all();
        $model1 = new Mapel();
        return view("admin.mata_pelajaran.create", compact('mapel','model1'));
    }


    public function show(string $idmp)
    {
        $mapel = Mapel::where('idmp', $idmp)->with('bidang')->first();
        return view("admin.mata_pelajaran.view", compact('mapel'));
    }

    public function store(Request $request)
    {
        $request['idbidang'] = intval($request['idbidang']);

        $this->validate($request, [
            'namamapel' => 'required|string',
            'idbidang' => 'required|integer',
        ]);

        try {
            // $user = Auth::user(); 
            $data = [
                'namamapel' => $request->input('namamapel'),
                'idbidang' => $request->input('idbidang'),
            ];

            Mapel::create($data);

            return redirect()->route('mata_pelajaran.index')->with('success', 'Mata Kuliah berhasil ditambah!');
        } catch (\Exception $e) {
            return redirect()->route('mata_pelajaran.create')->with('error', 'Gagal input Mata Kuliah. Pastikan data yang Anda masukkan benar.');
        }
    }

    public function update(Request $request, MataKuliah $mataKuliah)
    {
        $this->validate($request, [
            'NamaMK' => 'required|string',
            'SKS' => 'required|integer|min:1|max:6',
        ], [
            'SKS.max' => 'SKS harus kurang dari atau sama dengan :max.',
            'SKS.min' => 'SKS harus lebih dari atau sama dengan :min.',
        ]);

        $user = Auth::user();

        $data = [
            'NamaMK' => $request->input('NamaMK'),
            'SKS' => $request->input('SKS'),
            'user_id' => $user->id,
        ];

        $mataKuliah->update($data);

        return redirect()->route('admin.mata_pelajaran.index')->with('success', 'Mata Kuliah berhasil diperbarui!');
    }


    public function destroy($id)
    {
        $mataKuliah = MataKuliah::find($id);

        if (!$mataKuliah) {
            return redirect()->route('admin.mata_pelajaran.index')->with('error', 'Mata kuliah tidak ditemukan!');
        }

        $mataKuliah->delete();

        return redirect()->route('admin.mata_pelajaran.index')->with('success', 'Mata kuliah berhasil dihapus!');
    }


    public function edit(MataKuliah $mataKuliah)
    {
        return view("admin.mata_pelajaran.update", compact('mataKuliah'));
    }
}
