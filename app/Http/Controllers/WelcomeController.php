<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome', []);
    }

    public function kursus()
    {
        return view('pages.kursus', []);
    }

    public function pelayanan()
    {
        return view('pages.pelayanan', []);
    }

    public function konsultasi()
    {
        return view('pages.konsultasi', []);
    }

    public function login(){
        return view('pages.login', []);
    }

    public function pesan(){
        return view('pages.pesan', []);
    }
}