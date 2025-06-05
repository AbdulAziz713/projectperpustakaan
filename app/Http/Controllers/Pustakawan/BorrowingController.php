<?php

namespace App\Http\Controllers\Pustakawan;

use App\Http\Controllers\Controller;
use App\Models\Borrowing;
use App\Models\Member;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BorrowingController extends Controller
{
    public function index()
    {
        $borrowings = Borrowing::with(['member', 'book'])
            ->whereHas('member', function($query) {
                $query->whereNotNull('name');
            })
            ->latest()
            ->paginate(10);
            
        return view('pustakawan.borrowings.index', compact('borrowings'));
    }

    public function create()
    {
        $members = Member::where('status', 'active')->get();
        $books = Book::where('stock', '>', 0)->get();
        
        return view('pustakawan.borrowings.create', compact('members', 'books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'member_id' => 'required|exists:members,member_id',
            'book_id' => 'required|exists:books,id',
        ]);

        try {
            DB::beginTransaction();

            $book = Book::findOrFail($request->book_id);
            
            // Check if member has active borrowings
            $activeBorrowings = Borrowing::where('member_id', $request->member_id)
                ->where('status', 'dipinjam')
                ->count();
                
            if ($activeBorrowings >= 3) {
                return back()->with('error', 'Anggota sudah mencapai batas peminjaman (3 buku).');
            }

            if ($book->stock < 1) {
                return back()->with('error', 'Stok buku habis!');
            }

            // Update book stock
            $book->decrement('stock');

            // Create borrowing record
            Borrowing::create([
                'member_id' => $request->member_id,
                'book_id' => $request->book_id,
                'borrowed_at' => now(),
                'status' => 'dipinjam',
            ]);

            DB::commit();

            return redirect()
                ->route('pustakawan.borrowings.index')
                ->with('success', 'Buku berhasil dipinjam.');
                
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function returnBook(Borrowing $borrowing)
    {
        try {
            DB::beginTransaction();

            if ($borrowing->status === 'dikembalikan') {
                return back()->with('error', 'Buku sudah dikembalikan sebelumnya.');
            }

            $borrowing->update([
                'returned_at' => now(),
                'status' => 'dikembalikan'
            ]);

            // Return book stock
            $borrowing->book->increment('stock');

            DB::commit();

            return back()->with('success', 'Buku berhasil dikembalikan.');
            
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
