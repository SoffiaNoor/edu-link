<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;
use App\Models\PesanKursus;
use App\Models\PesanKonsul;
use App\Models\Mapel;
use App\Models\Mentor;
use App\Models\Murid;
use Illuminate\Support\Facades\Auth;

class PesanKonsulController extends Controller
{
    public function pesanKonsul()
    {
        $pesan_konsul = PesanKonsul::all();
        $redirectRoute = route('bayar.konsul');

        return view('pages.pesan_konsul', compact('pesan_konsul', 'redirectRoute'));
    }

    public function savePesanKonsul(Request $request)
    {
        $user = Auth::user();

        $mentorId = rand(1, 10);
        $selectedProgram = $request->input('radio');

        $pesanKonsul = PesanKonsul::create([
            'idmentor' => $mentorId,
            'idmurid' => $user->id,
            'idprogram' => $selectedProgram,
            'status' => 0,
            'bukti_bayar' => null,
        ]);

        $idkonsul = $pesanKonsul->idkonsul;
        session(['idkonsul' => $idkonsul]);

        return view('pages.bayar_konsul');

    }

    public function bayarKonsul()
    {
        $idkonsul = session('idkonsul');
        if ($idkonsul) {
            return view("pages.bayar_kursus", ['idkonsul' => $idkonsul]);
        } else {
            return response()->json(['error' => true, 'message' => 'idkursus not found in session']);
        }
    }

    public function buktiBayarKonsul(Request $request)
    {
        $idkonsul = session('idkonsul');
        // var_dump($idkonsul);die;
        if (!$idkonsul) {
            return redirect()->route('murid.dashboard')->with(['error' => true, 'message' => 'idkonsul not found in session']);
        }

        $request->validate([
            'bukti_bayar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->file('bukti_bayar')->extension();
        $request->file('bukti_bayar')->storeAs('uploads', $imageName);

        PesanKonsul::where('idkonsul', $idkonsul)->update([
            'status' => 1,
            'aktif' => 'Belum Digunakan',
            'bukti_bayar' => $imageName,
        ]);

        session()->forget('idkonsul');

        return redirect()->route('murid.dashboard');
    }
}
