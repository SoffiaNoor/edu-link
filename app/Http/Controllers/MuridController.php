<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Illuminate\Http\Request;
use App\Models\Murid;
use App\Models\User;
use App\Models\PesanKursus;
use Illuminate\Support\Facades\Auth;


class MuridController extends Controller
{
    public function showForm()
    {
        $loggedInUser = Auth::user();
        $muridData = $loggedInUser->murid;

        return view('murid.dashboard', compact('loggedInUser', 'muridData'));
    }

    public function store(Request $request)
    {
        $request['idbidang'] = intval($request['idbidang']);

        $request->validate([
            'namamurid' => 'required|string',
            'namasekolah' => 'required|string',
            'gender' => 'required|string',
            'tanggallahir' => 'required|date',
            'kelas' => 'required|integer',
            'idbidang' => 'required|integer',
        ]);

        $user = Auth::user();

        $murid = $user->murid ?? new Murid();
        $murid->namamurid = $request->input('namamurid');
        $murid->namasekolah = $request->input('namasekolah');
        $murid->gender = $request->input('gender');
        $murid->tanggallahir = $request->input('tanggallahir');
        $murid->kelas = $request->input('kelas');
        $murid->idbidang = $request->input('idbidang');

        $user->murid()->save($murid);

        return redirect()->route('murid.dashboard')->with('success', 'Murid data saved successfully!');
    }
    public function dashboard()
    {

        $user = Auth::user();
        return view("murid.dashboard", compact('user'));
    }

    public function mataPelajaran()
    {

        $user = Auth::user();
        $pesanKursusHistory = $user->pesan_kursus;
        return view("murid.matapelajaran", compact('user', 'pesanKursusHistory'));
    }

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

    // public function store(Request $request)
    // {
    //     $request['idbidang'] = intval($request['idbidang']);

    //     $test = $this->validate($request, [
    //         'namamurid' => 'required|string',
    //         'namasekolah' => 'required|string',
    //         'gender' => 'required|string',
    //         'tanggallahir' => 'required|string',
    //         'kelas' => 'required|string',
    //         'idbidang' => 'required|integer',
    //     ]);

    //     // var_dump($test);die;

    //     try {
    //         $data = [
    //             'namamurid' => $request->input('namamurid'),
    //             'namasekolah' => $request->input('namasekolah'),
    //             'gender' => $request->input('gender'),
    //             'tanggallahir' => $request->input('tanggallahir'),
    //             'kelas' => $request->input('kelas'),
    //             'idbidang' => $request->input('idbidang'),
    //         ];

    //         Murid::create($data);

    //         return redirect()->route('murid.index')->with('success', 'Data Murid berhasil ditambahkan!');
    //     } catch (\Exception $e) {
    //         return redirect()->route('murid.create')->with('error', 'Gagal input Murid. Pastikan data yang Anda masukkan benar.');
    //     }
    // }

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