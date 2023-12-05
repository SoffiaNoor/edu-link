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

    public function update(Request $request, Mapel $mapel)
    {
        $request['idbidang'] = intval($request['idbidang']);

        $this->validate($request, [
            'namamapel' => 'required|string',
            'idbidang' => 'required|integer',
        ]);


        $mapel->update($request->all());

        return redirect()->route('mata_pelajaran.index')->with('success', 'Mata Pelajaran berhasil diperbarui!');
    }


    public function destroy($idmp)
    {
        $mapel = Mapel::find($idmp);

        if (!$mapel) {
            return redirect()->route('admin.mata_pelajaran.index')->with('error', 'Mata kuliah tidak ditemukan!');
        }

        $mapel->delete();

        return redirect()->route('admin.mata_pelajaran.index')->with('success', 'Mata kuliah berhasil dihapus!');
    }


    public function edit($id)
    {
        $mapel = Mapel::find($id);
        $bidang = Bidang::all();
        return view("admin.mata_pelajaran.update", compact('mapel', 'bidang'));
    }
}
