<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;
use App\Models\PesanKursus;
use App\Models\Mapel;
use App\Models\Mentor;
use Illuminate\Support\Facades\Auth;

class PesanKursusController extends Controller
{
    public function pesan()
    {
        $mapel = Mapel::all();
        $mentor = Mentor::all();
        $bidang = Bidang::all();
        return view('pages.pesan', compact('mapel', 'mentor', 'bidang'));
    }

    public function pesanKursus()
    {
        $mapel = Mapel::all();
        $mentor = Mentor::all();
        $bidang = Bidang::all();
        return view('pages.pesan_kursus', compact('mapel', 'mentor', 'bidang'));
    }

    public function pesanKonsul()
    {
        $mapel = Mapel::all();
        $mentor = Mentor::all();
        $bidang = Bidang::all();
        return view('pages.pesan_konsul', compact('mapel', 'mentor', 'bidang'));
    }
    public function fetchMapelOptions()
    {
        $success = true;
        $message = "";
        $data = [];

        $bidang = isset($_GET['bidang']) ? $_GET['bidang'] : '';
        if (!empty($bidang)) {
            $mapelOptions = Mapel::where('idbidang', $bidang)->get(['idmp', 'namamapel']);
            if (!empty($mapelOptions)) {
                foreach ($mapelOptions as $r => $v) {
                    $data[$r]['id'] = $v->idmp;
                    $data[$r]['name'] = $v->namamapel;
                }
            }
        } else {
            $success = false;
            $message = 'Gagal ambil matkul';
        }

        return json_encode(['success' => $success, 'message' => $message, 'data' => $data]);
    }

    public function fetchMentorOptions()
    {
        $success = true;
        $message = "";
        $data = [];

        $bidang = isset($_GET['bidang']) ? $_GET['bidang'] : '';
        if (!empty($bidang)) {
            $mentorOptions = Mentor::where('idbidang', $bidang)->get(['idmentor', 'namamentor']);
            if (!empty($mentorOptions)) {
                foreach ($mentorOptions as $r => $v) {
                    $data[$r]['id'] = $v->idmentor;
                    $data[$r]['name'] = $v->namamentor;
                }
            }
        } else {
            $success = false;
            $message = 'Gagal ambil Mentor';
        }

        return json_encode(['success' => $success, 'message' => $message, 'data' => $data]);
    }

    public function fetchHarga()
    {
        $success = true;
        $message = "";
        $data = [];

        $mapel = isset($_GET['mapel']) ? $_GET['mapel'] : '';
        if (!empty($mapel)) {
            $hargakursus = Mapel::where('idmp', $mapel)->get(['idmp', 'harga']);
            if (!empty($hargakursus)) {
                foreach ($hargakursus as $r => $v) {
                    $data[$r]['id'] = $v->idmp;
                    $data[$r]['name'] = $v->harga;
                }
            }
        } else {
            $success = false;
            $message = 'Gagal ambil Harga';
        }

        return json_encode(['success' => $success, 'message' => $message, 'data' => $data]);
    }

    public function savePesanKursus(Request $request)
    {
        $validatedData = $request->validate([
            'bidang' => 'required',
            'mapel' => 'required',
            'mentor' => 'required',
            'jadwal' => 'required',
            'via' => 'required',
        ]);

        $bidang = $request->input('bidang');
        $mapel = $request->input('mapel');
        $mentor = $request->input('mentor');
        $jadwal = $request->input('jadwal');
        $via = $request->input('via');

        $pesanKursus = new PesanKursus();
        $pesanKursus->idmurid = Auth::user()->id;
        $pesanKursus->idmapel = $mapel;
        $pesanKursus->idmentor = $mentor;
        $pesanKursus->idbidang = $bidang;
        $pesanKursus->jadwal = $jadwal;
        $pesanKursus->via = $via;

        $pesanKursus->save();

        $idkursus = $pesanKursus->idkursus;
        session(['idkursus' => $idkursus]);

        return response()->json(['success' => true, 'message' => 'Data saved successfully']);
    }

    public function bayarKursus()
    {
        $idkursus = session('idkursus');
        if ($idkursus) {
            return view("pages.bayar_kursus", ['idkursus' => $idkursus]);
        } else {
            return response()->json(['error' => true, 'message' => 'idkursus not found in session']);
        }
    }

    public function buktiBayarKursus(Request $request)
    {
        $idkursus = session('idkursus');
        if (!$idkursus) {
            return redirect()->route('murid.dashboard')->with(['error' => true, 'message' => 'idkursus not found in session']);
        }
    
        $request->validate([
            'buktibayar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $imageName = time() . '.' . $request->file('buktibayar')->extension();
        $request->file('buktibayar')->storeAs('uploads', $imageName);
    
        PesanKursus::where('idkursus', $idkursus)->update([
            'status' => 1,
            'buktibayar' => $imageName,
        ]);
    
        session()->forget('idkursus');
    
        return redirect()->route('murid.dashboard');
    }
}
