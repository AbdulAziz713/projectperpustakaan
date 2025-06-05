<?php

namespace App\Http\Controllers\AdminDaerah;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Report;
use App\Models\Borrowing;
use App\Models\Book;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Unauthorized');
        }

        // Data pustakawan
        $totalPustakawan = User::where('role', 'anggota')->count();
        $pendingPustakawan = User::where('role', 'anggota')->count(); // Gantilah jika ada status "pending" sebenarnya

        // Laporan bulanan
        $monthlyReports = Report::whereMonth('created_at', now()->month)->count();

        // Buat data 6 bulan terakhir
        $months = collect();
        $reportsPerMonth = [];

        for ($i = 5; $i >= 0; $i--) {
            $date = now()->subMonths($i);
            $months->push($date->format('M'));

            $reportsPerMonth[] = Report::whereMonth('created_at', $date->month)
                ->whereYear('created_at', $date->year)
                ->count();
        }

        // Peminjaman bulan ini
        $monthlyBorrowings = Borrowing::whereMonth('borrowed_at', now()->month)->count();

        // 📚 Data buku
        $totalBooks = Book::count();
        $totalStock = Book::sum('stock');
        $booksThisMonth = Book::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();
        $booksPerpusda = Book::where('location', 'perpusda')->count();
        $totalStockPerpusda = Book::where('location', 'perpusda')->sum('stock');
        $booksCipeundeuy = Book::where('location', 'cipeundeuy')->count();
        $totalStockCipeundeuy = Book::where('location', 'cipeundeuy')->sum('stock');
        $booksCisalak = Book::where('location', 'cisalak')->count();
        $totalStockCisalak = Book::where('location', 'cisalak')->sum('stock');

        return view('admin_daerah.dashboard', compact(
            'totalPustakawan',
            'pendingPustakawan',
            'monthlyReports',
            'months',
            'reportsPerMonth',
            'monthlyBorrowings',
            'totalBooks',
            'totalStock',
            'booksThisMonth',
            'booksPerpusda',
            'totalStockPerpusda',
            'booksCipeundeuy',
            'totalStockCipeundeuy',
            'booksCisalak',
            'totalStockCisalak'
        ));
    }
}
