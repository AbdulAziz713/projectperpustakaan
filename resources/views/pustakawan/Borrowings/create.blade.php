@extends('layouts.admin')

@section('content_admin')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">📝 Form Peminjaman Buku</h1>

    <div class="card shadow">
        <div class="card-header py-3 bg-primary text-white">
            <h6 class="m-0 font-weight-bold">Tambah Data Peminjaman</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('pustakawan.borrowings.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="member_id" class="form-label">Pilih Anggota</label>
                    <select name="member_id" id="member_id" class="form-select" required>
                        <option disabled selected>-- Pilih Anggota --</option>
                        @foreach($members as $member)
                            <option value="{{ $member->member_id }}">{{ $member->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="book_id" class="form-label">Pilih Buku</label>
                    <select name="book_id" id="book_id" class="form-select" required>
                        <option disabled selected>-- Pilih Buku --</option>
                        @foreach($books as $book)
                            <option value="{{ $book->id }}">{{ $book->title }} (Stok: {{ $book->stock }})</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('pustakawan.borrowings.index') }}" class="btn btn-secondary me-2">
                        <i class="fas fa-arrow-left"></i> Batal
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-book"></i> Pinjam Buku
                    </button>
                </div>
            </form>
        </div>
    </div>

    @if(session('error'))
        <div class="alert alert-danger mt-3">{{ session('error') }}</div>
    @endif
    @if(session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif
</div>
@endsection
