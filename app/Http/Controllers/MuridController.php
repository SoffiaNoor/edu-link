<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Illuminate\Http\Request;
use App\Models\Murid;

class MuridController extends Controller
{
    public function index()
    {  
        $murid = Murid::with('bidang')->paginate(5);
        $bidang = Bidang::all();
        return view("admin.murid.index", compact('murid', 'bidang'));
    }
    public function create()
    {
        $murid = Murid::all();

        return view("admin.murid.create", compact('murid'));
    }


    public function show(string $idmurid)
    {
        $murid = Murid::where('idmurid', $idmurid)->with('bidang')->first();
        return view("admin.murid.view", compact('murid'));
    }

    public function store(Request $request)
    {
        $request['idbidang'] = intval($request['idbidang']);

        $test = $this->validate($request, [
            'namamurid' => 'required|string',
            'namasekolah' => 'required|string',
            'gender' => 'required|string',
            'tanggallahir' => 'required|string',
            'kelas' => 'required|string',
            'idbidang' => 'required|integer',
        ]);

        // var_dump($test);die;

        try {
            $data = [
                'namamurid' => $request->input('namamurid'),
                'namasekolah' => $request->input('namasekolah'),
                'gender' => $request->input('gender'),
                'tanggallahir' => $request->input('tanggallahir'),
                'kelas' => $request->input('kelas'),
                'idbidang' => $request->input('idbidang'),
            ];
    
            Murid::create($data);
    
            return redirect()->route('murid.index')->with('success', 'Data Murid berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->route('murid.create')->with('error', 'Gagal input Murid. Pastikan data yang Anda masukkan benar.');
        }
    }

    public function update(Request $request, Murid $murid)
    {
        $request['idbidang'] = intval($request['idbidang']);

        $this->validate($request, [
            'namamurid' => 'required|string',
            'namasekolah' => 'required|string',
            'gender' => 'required|string',
            'tanggallahir' => 'required|string',
            'kelas' => 'required|string',
            'idbidang' => 'required|integer',
        ]);

        $murid->update($request->all());

        return redirect()->route('murid.index')->with('success', 'murid berhasil diperbarui!');

    }

    public function destroy($idmurid)
    {
        $murid = Murid::find($idmurid);

        if (!$murid) {
            return redirect()->route('murid.index')->with('error', 'murid tidak ditemukan!');
        }

        $murid->delete();

        return redirect()->route('murid.index')->with('success', 'Murid berhasil dihapus!');
    }


    public function edit(Murid $murid)
    {
        $bidang = Bidang::all();
        return view("admin.murid.update", compact('murid', 'bidang'));
    }
}