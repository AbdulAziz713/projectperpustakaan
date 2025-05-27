<?php

namespace App\Http\Controllers\AdminDaerah;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Report;
use App\Models\Borrowing;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // ✅ Pengecekan Role: Hanya Admin Daerah yang diizinkan
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Unauthorized');
        }

        $totalPustakawan = User::where('role', 'anggota')->count();
        $pendingPustakawan = User::where('role', 'anggota')->count();
        
        // Get monthly reports count
        $monthlyReports = Report::whereMonth('created_at', now()->month)->count();
        
        // Get last 6 months
        $months = collect();
        for ($i = 5; $i >= 0; $i--) {
            $months->push(now()->subMonths($i)->format('M'));
        }
        
        // Get reports count for each month
        $reportsPerMonth = $months->map(function ($month) {
            return Report::whereMonth('created_at', Carbon::parse($month)->month)->count();
        })->toArray();

        // Get total borrowings this month
        $monthlyBorrowings = Borrowing::whereMonth('borrowed_at', now()->month)->count();

        return view('admin_daerah.dashboard', compact(
            'totalPustakawan',
            'pendingPustakawan',
            'monthlyReports',
            'months',
            'reportsPerMonth',
            'monthlyBorrowings'
        ));
    }
}
