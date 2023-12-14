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

        return view("admin.mata_pelajaran.index", compact('mapel', 'bidang'));
    }
    public function create()
    {
        $mapel = Mapel::all();
        $model1 = new Mapel();
        return view("admin.mata_pelajaran.create", compact('mapel', 'model1'));
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
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required|integer',
            'deskripsi' => 'required|string',
        ]);

        try {
            $imagePath = null;

            if ($request->hasFile('gambar')) {
                $image = $request->file('gambar');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/mapel'), $imageName);
                $imagePath = 'uploads/mapel/' . $imageName;
            }

            $data = [
                'namamapel' => $request->input('namamapel'),
                'idbidang' => $request->input('idbidang'),
                'gambar' => $imagePath,
                'harga' => $request->input('harga'),
                'deskripsi' => $request->input('deskripsi'),
            ];

            Mapel::create($data);

            return redirect()->route('mata_pelajaran.index')->with('success', 'Mata Kuliah berhasil ditambah!');
        } catch (\Exception $e) {
            return redirect()->route('mata_pelajaran.create')->with('error', 'Gagal input Mata Kuliah. Pastikan data yang Anda masukkan benar.');
        }
    }

    public function update(Request $request, $idmp)
    {
        $request['idbidang'] = intval($request['idbidang']);

        $this->validate($request, [
            'namamapel' => 'required|string',
            'idbidang' => 'required|integer',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
            'harga' => 'required|integer',
        ]);

        try {
            $mapel = Mapel::findOrFail($idmp);

            if ($request->hasFile('gambar')) {
                if ($mapel->gambar) {
                    unlink(public_path($mapel->gambar));
                }

                $image = $request->file('gambar');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/mapel'), $imageName);
                $imagePath = 'uploads/mapel/' . $imageName;

                $mapel->gambar = $imagePath;
            }

            $mapel->namamapel = $request->input('namamapel');
            $mapel->idbidang = $request->input('idbidang');
            $mapel->deskripsi = $request->input('deskripsi');
            $mapel->harga = $request->input('harga');
            $mapel->save();

            return redirect()->route('mata_pelajaran.index')->with('success', 'Mata Kuliah berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->route('mata_pelajaran.edit', $idmp)->with('error', 'Gagal memperbarui Mata Kuliah. Pastikan data yang Anda masukkan benar.');
        }
    }


    public function destroy($idmp)
    {
        $mapel = Mapel::find($idmp);

        if (!$mapel) {
            return redirect()->route('mata_pelajaran.index')->with('error', 'Mata kuliah tidak ditemukan!');
        }

        if ($mapel->gambar) {
            unlink(public_path($mapel->gambar));
        }

        $mapel->delete();

        return redirect()->route('mata_pelajaran.index')->with('success', 'Mata kuliah berhasil dihapus!');
    }


    public function edit($id)
    {
        $mapel = Mapel::find($id);
        $bidang = Bidang::all();
        return view("admin.mata_pelajaran.update", compact('mapel', 'bidang'));
    }
}
