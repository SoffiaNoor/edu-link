<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $kontak = Kontak::all();

        return view('pages.kontak', compact('kontak'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'nomor_wa' => 'required|string',
            'pesan' => 'required|string',
        ]);

        Kontak::create($validatedData);

        return redirect()->route('kontak.store');
    }
}