<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid;

class MuridController extends Controller
{
    public function index()
    {
        // $Dosen = Dosen::paginate(5);

        // return view("dosen.index", compact('Dosen'));
        return view("admin.murid.index");
    }
    public function create()
    {
        return view("admin.murid.create");
    }


    public function show(string $IDDosen)
    {
        $Dosen = Murid::where('IDDosen', $IDDosen)->first();
        return view("admin.murid.view", compact('murid'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'IDDosen' => 'required|max:5|string',
            'NamaDosen' => 'required|string',
            'Alamat' => 'required|string',
        ]);

        try {
            $data = [
                'IDDosen' => $request->input('IDDosen'),
                'NamaDosen' => $request->input('NamaDosen'),
                'Alamat' => $request->input('Alamat'),
            ];
    
            Murid::create($data);
    
            return redirect()->route('admin.murid.index')->with('success', 'Dosen berhasil ditambah!');
        } catch (\Exception $e) {
            return redirect()->route('admin.murid.create')->with('error', 'Gagal input Dosen. Pastikan data yang Anda masukkan benar.');
        }
    }

    public function update(Request $request, Murid $Dosen)
    {
        $this->validate($request, [
            'NamaDosen' => 'required|string',
            'Alamat' => 'required|string',
        ]);

        $Dosen->update($request->all());

        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil diperbarui!');

    }

    public function destroy($id)
    {
        $Dosen = Murid::find($id);

        if (!$Dosen) {
            return redirect()->route('dosen.index')->with('error', 'Dosen tidak ditemukan!');
        }

        $Dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil dihapus!');
    }


    public function edit(Murid $Dosen)
    {
        return view("dosen.update", compact('Dosen'));
    }
}