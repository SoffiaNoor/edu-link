<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome', []);
    }

    public function about_us()
    {
        return view('about_us', []);
    }

    public function portofolio()
    {
        return view('portofolio', []);
    }

    public function testimoni()
    {
        return view('testimoni', []);
    }
}