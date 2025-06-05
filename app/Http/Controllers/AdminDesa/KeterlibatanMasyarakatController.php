<?php

namespace App\Http\Controllers\AdminDesa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KeterlibatanMasyarakat;
use Illuminate\Support\Facades\Storage;

// app/Http/Controllers/KeterlibatanMasyarakatController.php
class KeterlibatanMasyarakatController extends Controller
{
    public function index()
    {
        $kegiatan = KeterlibatanMasyarakat::latest()->get();
        return view('admin_desa.keterlibatan.index', compact('kegiatan'));
    }

    public function create()
    {
        return view('admin_desa.keterlibatan.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi' => 'required',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $fullPath = null; // Inisialisasi default

    if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $filename = $file->hashName();
        $path = 'assets/keterlibatan/';
        $file->move(public_path($path), $filename);
        $fullPath = $path . $filename;
    }

    KeterlibatanMasyarakat::create([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'foto' => $fullPath,
    ]);

    return redirect()->route('admin_desa.keterlibatan.index')->with('success', 'Kegiatan berhasil ditambahkan.');
}

public function destroy(KeterlibatanMasyarakat $keterlibatan)
{
    if ($keterlibatan->foto && file_exists(public_path($keterlibatan->foto))) {
        unlink(public_path($keterlibatan->foto));
    }

    $keterlibatan->delete();

    return redirect()->route('admin_desa.keterlibatan.index')->with('success', 'Kegiatan berhasil dihapus.');
}
}
