<?php

namespace App\Http\Controllers\AdminDaerah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\User;
use App\Models\Visit;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReportsExport;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $bulan = $request->get('bulan');
        $tipe = $request->get('tipe', 'pustakawan'); // default: pustakawan
        $reports = null;
        $books = null;

        if ($tipe === 'anggota') {
            $reports = User::where('role', 'anggota')
                ->when($bulan, fn($query) => $query->whereMonth('created_at', $bulan))
                ->latest()
                ->paginate(10)
                ->withQueryString();
        } elseif ($tipe === 'pustakawan') {
            $reports = User::where('role', 'petugas')
                ->when($bulan, fn($query) => $query->whereMonth('created_at', $bulan))
                ->latest()
                ->paginate(10)
                ->withQueryString();
        } elseif ($tipe === 'kunjungan') {
            $reports = Visit::when($bulan, fn($query) => $query->whereMonth('date', $bulan))
                ->latest()
                ->paginate(10)
                ->withQueryString();
        } elseif ($tipe === 'buku_desa') {
            $books = \App\Models\Book::where('location', 'tanggulun_barat') // sesuaikan dengan field asli
                ->when($bulan, fn($query) => $query->whereMonth('created_at', $bulan))
                ->latest()
                ->paginate(10)
                ->withQueryString();
        } elseif ($tipe === 'buku_pustakawan') {
            $books = \App\Models\Book::where('location', 'perpusda') // sesuaikan juga
                ->when($bulan, fn($query) => $query->whereMonth('created_at', $bulan))
                ->latest()
                ->paginate(10)
                ->withQueryString();        
        } else {
            // Default: laporan pustakawan (peminjaman buku)
            $reports = Report::with(['user', 'book'])
                ->when($bulan, fn($query) => $query->whereMonth('borrowed_at', $bulan))
                ->latest()
                ->paginate(10)
                ->withQueryString();
        }

        return view('admin_daerah.reports.index', compact('reports', 'books'));
    }

    public function exportExcel(Request $request)
    {
        $bulan = $request->get('bulan');
        $tipe = $request->get('tipe', 'pustakawan');

        if ($tipe === 'anggota') {
            $reports = User::where('role', 'anggota')
                ->when($bulan, fn($query) => $query->whereMonth('created_at', $bulan))
                ->get();
        } elseif ($tipe === 'kunjungan') {
            $reports = Visit::when($bulan, fn($query) => $query->whereMonth('date', $bulan))
                ->get();
        } elseif ($tipe === 'buku_desa') {
                    $reports = \App\Models\Book::where('location', 'tanggulun_barat')
                        ->when($bulan, fn($query) => $query->whereMonth('created_at', $bulan))
                        ->get();
                } elseif ($tipe === 'buku_pustakawan') {
                    $reports = \App\Models\Book::where('location', 'perpusda')
                        ->when($bulan, fn($query) => $query->whereMonth('created_at', $bulan))
                        ->get();                
        } elseif ($tipe === 'pustakawan') {
            $reports = User::where('role', 'petugas')
                ->when($bulan, fn($query) => $query->whereMonth('created_at', $bulan))
                ->get();
        } else {
            $reports = Report::with(['user', 'book'])
                ->when($bulan, fn($query) => $query->whereMonth('borrowed_at', $bulan))
                ->get();
        }

        $excel = PDF::loadView('admin_daerah.reports.excel', compact('reports', 'tipe'));
        return Excel::download(new ReportsExport($bulan, $tipe), 'laporan.xlsx');
    }

    public function exportPDF(Request $request)
    {
        $bulan = $request->get('bulan');
        $tipe = $request->get('tipe', 'pustakawan');

        if ($tipe === 'anggota') {
            $reports = User::where('role', 'anggota')
                ->when($bulan, fn($query) => $query->whereMonth('created_at', $bulan))
                ->get();
        } elseif ($tipe === 'kunjungan') {
            $reports = Visit::when($bulan, fn($query) => $query->whereMonth('date', $bulan))
                ->get();
        } elseif ($tipe === 'buku_desa') {
                    $reports = \App\Models\Book::where('location', 'tanggulun_barat')
                        ->when($bulan, fn($query) => $query->whereMonth('created_at', $bulan))
                        ->get();
                } elseif ($tipe === 'buku_pustakawan') {
                    $reports = \App\Models\Book::where('location', 'perpusda')
                        ->when($bulan, fn($query) => $query->whereMonth('created_at', $bulan))
                        ->get();                
        } elseif ($tipe === 'pustakawan') {
            $reports = User::where('role', 'petugas')
                ->when($bulan, fn($query) => $query->whereMonth('created_at', $bulan))
                ->get();
        } else {
            $reports = Report::with(['user', 'book'])
                ->when($bulan, fn($query) => $query->whereMonth('borrowed_at', $bulan))
                ->get();
        }

        $pdf = PDF::loadView('admin_daerah.reports.pdf', compact('reports', 'tipe'));
        return $pdf->download('laporan.pdf');
    }
}
