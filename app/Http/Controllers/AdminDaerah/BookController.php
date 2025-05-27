<?php

namespace App\Http\Controllers\AdminDaerah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(10);
        return view('admin_daerah.books.index', compact('books'));
    }

    public function create()
    {
        return view('admin_daerah.books.create');
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

        Book::create($validated);

        return redirect()->route('admin_daerah.books.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function edit(Book $book)
    {
        return view('admin_daerah.books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
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
            // Hapus foto lama jika ada
            if ($book->photo) {
                Storage::disk('public')->delete($book->photo);
            }
            $validated['photo'] = $request->file('photo')->store('book_photos', 'public');
        }
        
        $book->update($validated);

        return redirect()->route('admin_daerah.books.index')->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('admin_daerah.books.index')->with('success', 'Buku berhasil dihapus.');
    }
}
