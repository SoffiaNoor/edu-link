<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Murid;
use Illuminate\Support\Facades\Auth;
use App\Models\PesanKursus;


class HomeController extends Controller
{
    public function index()
    {
        $femaleCount = Murid::where('gender', 'Perempuan')->count();
        $maleCount = Murid::where('gender', 'Laki-laki')->count();
        $murid = Murid::all();
        return view("admin.home", compact('murid', 'femaleCount', 'maleCount'));
    }
    public function getChartData()
    {
        // Fetch data from the database
        $data = PesanKursus::select('idmapel')->get();

        // Return data as JSON
        return response()->json($data);
    }

}
