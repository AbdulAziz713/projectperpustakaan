<?php

namespace App\Http\Controllers\Pustakawan;

use App\Http\Controllers\Controller;
use App\Models\Borrowing;
use Illuminate\Http\Request;
use App\Models\Book;

class DashboardController extends Controller
{
    public function index()
    {
        $borrowedToday = Borrowing::whereDate('borrowed_at', today())->count();
        $notReturned = Borrowing::whereNull('returned_at')->count();

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

        return view('pustakawan.dashboard',compact(
            'borrowedToday',
            'notReturned',
            'totalBooks',
            'totalStock',
            'booksThisMonth',
            'booksPerpusda',
            'totalStockPerpusda',
            'booksCipeundeuy',
            'totalStockCipeundeuy',
            'booksCisalak',
            'totalStockCisalak'));
    }
}
