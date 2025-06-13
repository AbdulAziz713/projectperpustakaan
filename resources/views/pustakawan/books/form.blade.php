<div class="mb-3">
    <label class="form-label">Judul</label>
    <input type="text" name="title" value="{{ old('title', $book->title ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Penulis</label>
    <input type="text" name="author" value="{{ old('author', $book->author ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Penerbit</label>
    <input type="text" name="publisher" value="{{ old('publisher', $book->publisher ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Tahun</label>
    <select name="year" class="form-select" required>
        <option value="">Pilih Tahun</option>
        @for($year = date('Y'); $year >= 1900; $year--)
            <option value="{{ $year }}" {{ old('year', $book->year ?? '') == $year ? 'selected' : '' }}>
                {{ $year }}
            </option>
        @endfor
    </select>
</div>

<div class="mb-3">
    <label class="form-label">Stok</label>
    <input type="number" name="stock" value="{{ old('stock', $book->stock ?? 0) }}" class="form-control" min="0" required>
</div>

<div class="mb-3">
    <label class="form-label">Deskripsi</label>
    <textarea name="description" class="form-control" rows="4">{{ old('description', $book->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">Foto Sampul</label>
    <input type="file" name="photo" class="form-control">
    @if(isset($book) && $book->photo)
        <div class="mt-2">
            <img src="{{ asset('assets/Buku/' . $book->photo) }}" class="cover-preview" style="width: 80px; height: 100px;" alt="Cover">
        </div>
    @endif
</div>