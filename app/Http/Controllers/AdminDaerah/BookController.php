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
        ], [
            'title.required' => 'Judul wajib diisi.',
            'photo.image' => 'File harus berupa gambar.',
            'photo.max' => 'Ukuran file foto maksimal 2MB.',
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = uniqid() . '.' . $photo->getClientOriginalExtension();
            $destinationPath = public_path('assets/Buku');
        
            // Pastikan direktori tujuan ada
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
        
            $photo->move($destinationPath, $filename);
            $validated['photo'] = $filename; // Simpan hanya nama file, tanpa path
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
        ], [
            'title.required' => 'Judul wajib diisi.',
            'photo.image' => 'File harus berupa gambar.',
            'photo.max' => 'Ukuran file foto maksimal 2MB.',
        ]);

        if ($request->hasFile('photo')) {
            // Hapus file lama jika ada
            if ($book->photo && file_exists(public_path('assets/Buku/' . $book->photo))) {
                unlink(public_path('assets/Buku/' . $book->photo));
            }
        
            $photo = $request->file('photo');
            $filename = uniqid() . '.' . $photo->getClientOriginalExtension();
            $destinationPath = public_path('assets/Buku');
        
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
        
            $photo->move($destinationPath, $filename);
            $validated['photo'] = $filename;
        }        
        
        $book->update($validated);

        return redirect()->route('admin_daerah.books.index')->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy(Book $book)
    {
        if ($book->stock > 0) {
            return redirect()->route('admin_daerah.books.index')
                             ->with('error', 'Buku tidak bisa dihapus karena masih memiliki stok.');
        }
        
        // Hapus file cover jika ada
        if ($book->photo && file_exists(public_path('assets/Buku/' . $book->photo))) {
            unlink(public_path('assets/Buku/' . $book->photo));
        }

        $book->delete();

        return redirect()->route('admin_daerah.books.index')->with('success', 'Buku berhasil dihapus.');
    }
}
