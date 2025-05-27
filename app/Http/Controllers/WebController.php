<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    // Struktur Organisasi
    public function strukturOrganisasi()
    {
        return view('struktur-organisasi');
    }

    // Sejarah
    public function sejarah()
    {
        return view('sejarah');
    }

    // Unit Kerja
    public function unitKerja()
    {
        return view('unit-kerja');
    }

    // Layanan
    public function layanan()
    {
        return view('layanan');
    }

    // Berita
    public function berita()
    {
        return view('berita');
    }

    // Testimoni
    public function testimoni()
    {
        return view('testimoni');
    }

    // Agenda
    public function agenda()
    {
        return view('agenda');
    }

    // Buku Terbaru
    public function bukuTerbaru()
    {
        return view('buku-terbaru');
    }

    // Perpustakaan Terdekat
    public function perpustakaanTerdekat()
    {
        return view('perpustakaan-terdekat');
    }
}
