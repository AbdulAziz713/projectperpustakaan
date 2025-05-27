<?php

namespace App\Http\Controllers\Pustakawan;

use App\Http\Controllers\Controller;
use App\Models\Borrowing;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $borrowedToday = Borrowing::whereDate('borrowed_at', today())->count();
        $notReturned = Borrowing::whereNull('returned_at')->count();

        return view('pustakawan.dashboard', compact('borrowedToday', 'notReturned'));
    }
}
