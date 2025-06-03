<?php

namespace App\Http\Controllers\AdminDesa;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Visit;
use App\Models\Book;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalMembers = Member::count();
        $todayVisits = Visit::whereDate('visit_date', today())->count();
        $totalBooks = Book::count();
        $months = collect(range(0, 5))->map(function ($i) {
            return now()->subMonths($i)->format('M');
        })->reverse()->toArray();
        $visitsPerMonth = collect($months)->map(fn($month) => Visit::whereMonth('visit_date', date('m', strtotime($month)))->count())->toArray();

        $booksTanggulun = Book::where('location', 'tanggulun_barat')->count();
        $totalStockTanggulun = Book::where('location', 'tanggulun_barat')->sum('stock');
        $booksThisMonth = Book::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();

        return view('admin_desa.dashboard', compact(
            'totalMembers',
            'todayVisits',
            'totalBooks',
            'months',
            'visitsPerMonth',
            'booksTanggulun',
            'totalStockTanggulun',
            'booksThisMonth'
        ));
    }
}
