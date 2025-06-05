@extends('layouts.admin')

@section('content_admin')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">📚 Daftar Peminjaman Buku</h1>

    <a href="{{ route('pustakawan.borrowings.create') }}" class="btn btn-success mb-3">
        <i class="fas fa-plus-circle"></i> Tambah Peminjaman
    </a>

    <div class="card shadow">
        <div class="card-header py-3 bg-primary text-white">
            <h6 class="m-0 font-weight-bold">Riwayat Peminjaman</h6>
        </div>
        <div class="card-body">
            @if(count($borrowings) > 0)
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center">
                        <thead class="table-light">
                            <tr>
                                <th>Nama Anggota</th>
                                <th>Judul Buku</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($borrowings as $borrowing)
                            <tr>
                                <td>{{ $borrowing->member?->name ?? 'N/A' }}</td>
                                <td>{{ $borrowing->book?->title ?? 'N/A' }}</td>
                                <td>{{ $borrowing->borrowed_at ? \Carbon\Carbon::parse($borrowing->borrowed_at)->format('d M Y') : 'N/A' }}</td>
                                <td>{{ $borrowing->returned_at ? \Carbon\Carbon::parse($borrowing->returned_at)->format('d M Y') : '-' }}</td>
                                <td>
                                    @if($borrowing->status === 'dipinjam')
                                        <span class="badge bg-warning text-dark">Dipinjam</span>
                                    @else
                                        <span class="badge bg-success">Dikembalikan</span>
                                    @endif
                                </td>
                                <td>
                                    @if($borrowing->status === 'dipinjam')
                                    <form action="{{ route('pustakawan.borrowings.return', $borrowing->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-warning btn-sm" onclick="return confirm('Yakin ingin mengembalikan buku ini?')">
                                            <i class="fas fa-undo"></i> Kembalikan
                                        </button>
                                    </form>
                                    @else
                                        <i class="fas fa-check-circle text-success"></i>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-info text-center">
                    <i class="fas fa-info-circle"></i> Belum ada data peminjaman.
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
