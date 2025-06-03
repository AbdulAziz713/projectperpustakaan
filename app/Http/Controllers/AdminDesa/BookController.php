<?php

namespace App\Http\Controllers\AdminDesa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $userLocation = auth()->user()->location;

        $books = Book::where('location', $userLocation)
                     ->latest()
                     ->paginate(10);

        return view('admin_desa.books.index', compact('books'));
    }

    public function create()
    {
        return view('admin_desa.books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'nullable',
            'year' => 'nullable|digits:4',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('book_photos', 'public');
        }

        // Tambahkan lokasi dari user login
        $validated['location'] = auth()->user()->location;

        Book::create($validated);

        return redirect()->route('admin_desa.books.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function edit(Book $book)
    {
        $this->authorizeLocation($book);

        return view('admin_desa.books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $this->authorizeLocation($book);

        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'nullable',
            'year' => 'nullable|digits:4',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            if ($book->photo) {
                Storage::disk('public')->delete($book->photo);
            }

            $validated['photo'] = $request->file('photo')->store('book_photos', 'public');
        }

        $book->update($validated);

        return redirect()->route('admin_desa.books.index')->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy(Book $book)
    {
        $this->authorizeLocation($book);

        if ($book->photo) {
            Storage::disk('public')->delete($book->photo);
        }

        $book->delete();

        return redirect()->route('admin_desa.books.index')->with('success', 'Buku berhasil dihapus.');
    }

    /**
     * Mengecek apakah buku sesuai dengan lokasi user login.
     */
    protected function authorizeLocation(Book $book)
    {
        if ($book->location !== auth()->user()->location) {
            abort(403, 'Anda tidak diizinkan mengakses buku ini.');
        }
    }
}
