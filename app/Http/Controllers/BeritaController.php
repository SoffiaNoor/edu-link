<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\TagBerita;


class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();

        return view('pages.berita', compact('berita'));
    }
    public function detail_berita(Request $request)
    {
        $berita = Berita::where('id', $request->id)->first();
        $tagBerita = TagBerita::find($berita->berita_tag_id);
        $tagBerita2 = TagBerita::find($berita->berita_tag_id_2);

        return view('pages.detail_berita', compact('berita','tagBerita','tagBerita2'));
    }

    public function detail()
    {
        return view('pages.detail_berita', []);
    }
}