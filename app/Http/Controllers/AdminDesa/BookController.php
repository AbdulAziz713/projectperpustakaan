<?php

namespace App\Http\Controllers\AdminDesa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

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
        ], [
            'title.required' => 'Judul wajib diisi.',
            'photo.image' => 'File harus berupa gambar.',
            'photo.max' => 'Ukuran file foto maksimal 2MB.',
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = uniqid() . '.' . $photo->getClientOriginalExtension();
            $destination = public_path('assets/Buku');

            if (!file_exists($destination)) {
                mkdir($destination, 0755, true);
            }

            $photo->move($destination, $filename);
            $validated['photo'] = $filename;
        }

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
        ], [
            'title.required' => 'Judul wajib diisi.',
            'photo.image' => 'File harus berupa gambar.',
            'photo.max' => 'Ukuran file foto maksimal 2MB.',
        ]);

        if ($request->hasFile('photo')) {
            $oldPhotoPath = public_path('assets/Buku/' . $book->photo);
            if ($book->photo && file_exists($oldPhotoPath)) {
                unlink($oldPhotoPath);
            }

            $photo = $request->file('photo');
            $filename = uniqid() . '.' . $photo->getClientOriginalExtension();
            $destination = public_path('assets/Buku');

            if (!file_exists($destination)) {
                mkdir($destination, 0755, true);
            }

            $photo->move($destination, $filename);
            $validated['photo'] = $filename;
        }

        $book->update($validated);

        return redirect()->route('admin_desa.books.index')->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy(Book $book)
    {
        $this->authorizeLocation($book);

        $photoPath = public_path('assets/Buku/' . $book->photo);
        if ($book->photo && file_exists($photoPath)) {
            unlink($photoPath);
        }

        if ($book->stock > 0) {
            return redirect()->route('admin_daerah.books.index')
                             ->with('error', 'Buku tidak bisa dihapus karena masih memiliki stok.');
        }
        
        // Hapus file cover jika ada
        if ($book->photo && file_exists(public_path('assets/Buku/' . $book->photo))) {
            unlink(public_path('assets/Buku/' . $book->photo));
        }

        $book->delete();

        return redirect()->route('admin_desa.books.index')->with('success', 'Buku berhasil dihapus.');
    }

    protected function authorizeLocation(Book $book)
    {
        if ($book->location !== auth()->user()->location) {
            abort(403, 'Anda tidak diizinkan mengakses buku ini.');
        }
    }
}
