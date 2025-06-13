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
        $tahun = $request->get('tahun');
        $tanggal = $request->get('tanggal');
        $tipe = $request->get('tipe', 'pustakawan');
        $reports = null;
        $books = null;

        if ($tipe === 'anggota') {
            $reports = User::where('role', 'anggota')
                ->when($bulan, fn($q) => $q->whereMonth('created_at', $bulan))
                ->when($tahun, fn($q) => $q->whereYear('created_at', $tahun))
                ->when($tanggal, fn($q) => $q->whereDay('created_at', $tanggal))
                ->latest()
                ->paginate(10)
                ->withQueryString();
        } elseif ($tipe === 'pustakawan') {
            $reports = User::where('role', 'petugas')
                ->when($bulan, fn($q) => $q->whereMonth('created_at', $bulan))
                ->when($tahun, fn($q) => $q->whereYear('created_at', $tahun))
                ->when($tanggal, fn($q) => $q->whereDay('created_at', $tanggal))
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
                ->when($bulan, fn($q) => $q->whereMonth('created_at', $bulan))
                ->when($tahun, fn($q) => $q->whereYear('created_at', $tahun))
                ->when($tanggal, fn($q) => $q->whereDay('created_at', $tanggal))
                ->latest()
                ->paginate(10)
                ->withQueryString();
        } elseif ($tipe === 'buku_pustakawan') {
            $books = \App\Models\Book::where('location', 'perpusda') // sesuaikan juga
                ->when($bulan, fn($q) => $q->whereMonth('created_at', $bulan))
                ->when($tahun, fn($q) => $q->whereYear('created_at', $tahun))
                ->when($tanggal, fn($q) => $q->whereDay('created_at', $tanggal))
                ->latest()
                ->paginate(10)
                ->withQueryString();        
        } else {
            // Default: laporan pustakawan (peminjaman buku)
            $reports = Report::with(['user', 'book'])
                ->when($bulan, fn($q) => $q->whereMonth('created_at', $bulan))
                ->when($tahun, fn($q) => $q->whereYear('created_at', $tahun))
                ->when($tanggal, fn($q) => $q->whereDay('created_at', $tanggal))
                ->latest()
                ->paginate(10)
                ->withQueryString();
        }

        return view('admin_daerah.reports.index', compact('reports', 'books'));
    }

    public function exportExcel(Request $request)
    {
        $bulan = $request->get('bulan');
        $tanggal = $request->get('tanggal');
        $tahun = $request->get('tahun');
        $tipe = $request->get('tipe', 'pustakawan');

        if ($tipe === 'anggota') {
            $reports = User::where('role', 'anggota')
                ->when($bulan, fn($q) => $q->whereMonth('created_at', $bulan))
                ->when($tahun, fn($q) => $q->whereYear('created_at', $tahun))
                ->when($tanggal, fn($q) => $q->whereDay('created_at', $tanggal))
                ->get();
        } elseif ($tipe === 'kunjungan') {
            $reports = Visit::
                when($bulan, fn($q) => $q->whereMonth('created_at', $bulan))
                ->when($tahun, fn($q) => $q->whereYear('created_at', $tahun))
                ->when($tanggal, fn($q) => $q->whereDay('created_at', $tanggal))
                ->get();
        } elseif ($tipe === 'buku_desa') {
                    $reports = \App\Models\Book::where('location', 'tanggulun_barat')
                        ->when($bulan, fn($q) => $q->whereMonth('created_at', $bulan))
                        ->when($tahun, fn($q) => $q->whereYear('created_at', $tahun))
                        ->when($tanggal, fn($q) => $q->whereDay('created_at', $tanggal))
                        ->get();
                } elseif ($tipe === 'buku_pustakawan') {
                    $reports = \App\Models\Book::where('location', 'perpusda')
                        ->when($bulan, fn($q) => $q->whereMonth('created_at', $bulan))
                        ->when($tahun, fn($q) => $q->whereYear('created_at', $tahun))
                        ->when($tanggal, fn($q) => $q->whereDay('created_at', $tanggal))
                        ->get();                
        } elseif ($tipe === 'pustakawan') {
            $reports = User::where('role', 'petugas')
                ->when($bulan, fn($q) => $q->whereMonth('created_at', $bulan))
                ->when($tahun, fn($q) => $q->whereYear('created_at', $tahun))
                ->when($tanggal, fn($q) => $q->whereDay('created_at', $tanggal))
                ->get();
        } else {
            $reports = Report::with(['user', 'book'])
                ->when($bulan, fn($q) => $q->whereMonth('created_at', $bulan))
                ->when($tahun, fn($q) => $q->whereYear('created_at', $tahun))
                ->when($tanggal, fn($q) => $q->whereDay('created_at', $tanggal))
                ->get();
        }

        $excel = PDF::loadView('admin_daerah.reports.excel', compact('reports', 'tipe'));
        return Excel::download(new ReportsExport($bulan, $tipe), 'laporan.xlsx');
    }

    public function exportPDF(Request $request)
    {
        $bulan = $request->get('bulan');
        $tanggal = $request->get('tanggal');
        $tahun = $request->get('tahun');
        $tipe = $request->get('tipe', 'pustakawan');

        if ($tipe === 'anggota') {
            $reports = User::where('role', 'anggota')
                ->when($bulan, fn($q) => $q->whereMonth('created_at', $bulan))
                ->when($tahun, fn($q) => $q->whereYear('created_at', $tahun))
                ->when($tanggal, fn($q) => $q->whereDay('created_at', $tanggal))
                ->get();
        } elseif ($tipe === 'kunjungan') {
            $reports = Visit::when($bulan, fn($q) => $q->whereMonth('created_at', $bulan))
                ->when($tahun, fn($q) => $q->whereYear('created_at', $tahun))
                ->when($tanggal, fn($q) => $q->whereDay('created_at', $tanggal))
                ->get();
        } elseif ($tipe === 'buku_desa') {
                    $reports = \App\Models\Book::where('location', 'tanggulun_barat')
                        ->when($bulan, fn($q) => $q->whereMonth('created_at', $bulan))
                        ->when($tahun, fn($q) => $q->whereYear('created_at', $tahun))
                        ->when($tanggal, fn($q) => $q->whereDay('created_at', $tanggal))
                        ->get();
                } elseif ($tipe === 'buku_pustakawan') {
                    $reports = \App\Models\Book::where('location', 'perpusda')
                        ->when($bulan, fn($q) => $q->whereMonth('created_at', $bulan))
                        ->when($tahun, fn($q) => $q->whereYear('created_at', $tahun))
                        ->when($tanggal, fn($q) => $q->whereDay('created_at', $tanggal))
                        ->get();                
        } elseif ($tipe === 'pustakawan') {
            $reports = User::where('role', 'petugas')
                ->when($bulan, fn($q) => $q->whereMonth('created_at', $bulan))
                ->when($tahun, fn($q) => $q->whereYear('created_at', $tahun))
                ->when($tanggal, fn($q) => $q->whereDay('created_at', $tanggal))
                ->get();
        } else {
            $reports = Report::with(['user', 'book'])
                ->when($bulan, fn($q) => $q->whereMonth('created_at', $bulan))
                ->when($tahun, fn($q) => $q->whereYear('created_at', $tahun))
                ->when($tanggal, fn($q) => $q->whereDay('created_at', $tanggal))
                ->get();
        }

        $pdf = PDF::loadView('admin_daerah.reports.pdf', compact('reports', 'tipe'));
        return $pdf->download('laporan.pdf');
    }
}
