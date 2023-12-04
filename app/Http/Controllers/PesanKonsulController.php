<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesanKonsul;

class PesanKonsulController extends Controller
{
    public function index()
    {
        $pesan_konsul = PesanKonsul::paginate(5);

        // return view("pesan_konsul.index", compact('pesan_konsul'));
        return view("admin.PesanKonsul.index");
    }
    public function create()
    {
        return view("admin.pesan_konsul.create");
    }


    public function show(string $IDpesan_konsul)
    {
        $pesan_konsul = pesan_konsul::where('IDpesan_konsul', $IDpesan_konsul)->first();
        return view("admin.pesan_konsul.view", compact('pesan_konsul'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'IDpesan_konsul' => 'required|max:5|string',
            'Namapesan_konsul' => 'required|string',
            'Kapasitas'=> 'required|integer|min:1',
        ], [
            'Kapasitas.min' => 'Kapasitas harus lebih dari atau sama dengan :min.',
        ]);
        
        try {
            $data = [
                'IDpesan_konsul' => $request->input('IDpesan_konsul'),
                'Namapesan_konsul' => $request->input('Namapesan_konsul'),
                'Kapasitas' => $request->input('Kapasitas'),
            ];
    
            pesan_konsul::create($data);
    
            return redirect()->route('admin.pesan_konsul.index')->with('success', 'pesan_konsul berhasil ditambah!');
        } catch (\Exception $e) {
            return redirect()->route('admin.pesan_konsul.create')->with('error', 'Gagal input pesan_konsul. Pastikan data yang Anda masukkan benar.');
        }
        
    }

    public function update(Request $request, pesan_konsul $pesan_konsul)
    {
        $this->validate($request, [
            'Namapesan_konsul' => 'required|string',
            'Kapasitas' => 'required|integer|min:1',
        ], [
            'Kapasitas.min' => 'Kapasitas harus lebih dari atau sama dengan :min.',
        ]);

        $pesan_konsul->update($request->all());

        return redirect()->route('admin.pesan_konsul.index')->with('success', 'pesan_konsul berhasil diperbarui!');

    }

    public function destroy($id)
    {
        $pesan_konsul = pesan_konsul::find($id);

        if (!$pesan_konsul) {
            return redirect()->route('admin.pesan_konsul.index')->with('error', 'pesan_konsul tidak ditemukan!');
        }

        $pesan_konsul->delete();

        return redirect()->route('admin.pesan_konsul.index')->with('success', 'pesan_konsul berhasil dihapus!');
    }


    public function edit(pesan_konsul $pesan_konsul)
    {
        return view("admin.pesan_konsul.update", compact('pesan_konsul'));
    }
}
