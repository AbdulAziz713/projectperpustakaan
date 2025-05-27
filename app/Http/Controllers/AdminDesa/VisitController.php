<?php

namespace App\Http\Controllers\AdminDesa;

use App\Models\Visit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class VisitController extends Controller
{
    public function index(Request $request)
{
    $query = Visit::query();

    // Filter berdasarkan bulan jika ada
    if ($request->filled('bulan')) {
        $query->whereMonth('date', $request->bulan);
    }

    $visits = $query->latest()->get();

    return view('admin_desa.visits.index', compact('visits'));
}


    public function create()
    {
        return view('admin_desa.visits.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'date' => 'required|date',
            'enter_at' => 'required',
            'out_at' => 'nullable',
        ]);

        Visit::create($request->all());

        return redirect()->route('admin_desa.visits.index')->with('success', 'Kunjungan berhasil ditambahkan.');
    }

    public function edit(Visit $visit)
    {
        return view('admin_desa.visits.edit', compact('visit'));
    }

    public function update(Request $request, Visit $visit)
    {
        $request->validate([
            'name' => 'required|string',
            'date' => 'required|date',
            'enter_at' => 'required',
            'out_at' => 'nullable',
        ]);

        $visit->update($request->all());

        return redirect()->route('admin_desa.visits.index')->with('success', 'Kunjungan berhasil diperbarui.');
    }

    public function destroy(Visit $visit)
    {
        $visit->delete();
        return redirect()->route('admin_desa.visits.index')->with('success', 'Kunjungan berhasil dihapus.');
    }
}
