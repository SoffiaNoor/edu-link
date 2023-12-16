<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Bidang;
use App\Models\Mentor;
class WelcomeController extends Controller
{
    public function index()
    {
        $mentor = Mentor::all();
        return view('welcome', compact('mentor'));
    }

    public function kursus()
    {
        $mapel = Mapel::all();

        $bidang = Bidang::all();

        return view("pages.kursus", compact('mapel', 'bidang'));
    }

    public function pelayanan()
    {
        return view('pages.pelayanan', []);
    }

    public function konsultasi()
    {
        return view('pages.konsultasi', []);
    }

    public function login()
    {
        return view('pages.login', []);
    }

    public function pesan()
    {
        return view('pages.pesan', []);
    }

    public function detail($id)
    {
        $mapel = Mapel::find($id);
        $bidang = Bidang::all();
        return view("pages.detail", compact('mapel', 'bidang'));
    }
}