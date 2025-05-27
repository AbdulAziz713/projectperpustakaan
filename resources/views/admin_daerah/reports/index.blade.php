@extends('layouts.admin')

@section('content_admin')
<div class="container py-4">
    <h1 class="h4 fw-bold text-primary mb-4">Kelola Laporan</h1>

    <form method="GET" class="row g-3 mb-4 align-items-end">
        <div class="col-md-3">
            <label for="bulan" class="form-label">Bulan</label>
            <select name="bulan" id="bulan" class="form-select">
                <option value="">Semua Bulan</option>
                @for($i=1; $i<=12; $i++)
                    <option value="{{ $i }}" {{ request('bulan') == $i ? 'selected' : '' }}>
                        {{ DateTime::createFromFormat('!m', $i)->format('F') }}
                    </option>
                @endfor
            </select>
        </div>

        <div class="col-md-3">
            <label for="tipe" class="form-label">Tipe Data</label>
            <select name="tipe" id="tipe" class="form-select">
                <option value="pustakawan" {{ request('tipe') == 'pustakawan' ? 'selected' : '' }}>Pustakawan</option>
                <option value="anggota" {{ request('tipe') == 'anggota' ? 'selected' : '' }}>Anggota</option>
                <option value="kunjungan" {{ request('tipe') == 'kunjungan' ? 'selected' : '' }}>Kunjungan</option>
                <!-- <option value="buku" {{ request('tipe') == 'buku' ? 'selected' : '' }}>Buku</option> -->
            </select>
        </div>

        <div class="col-md-2">
            <button type="submit" class="btn btn-primary">Terapkan</button>
        </div>
    </form>

    <div class="d-flex gap-3 mb-4">
        <a href="{{ route('admin_daerah.reports.export.excel', request()->only('bulan', 'tipe')) }}" class="btn btn-success">Export Excel</a>
        <a href="{{ route('admin_daerah.reports.export.pdf', request()->only('bulan', 'tipe')) }}" class="btn btn-danger">Export PDF</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                @if(request('tipe') == 'anggota')
                    <table class="table table-hover table-striped">
                        <thead class="table-primary">
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Tanggal Bergabung</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reports as $anggota)
                            <tr>
                                <td>{{ $anggota->name }}</td>
                                <td>{{ $anggota->email }}</td>
                                <td>{{ $anggota->created_at->format('d M Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @elseif(request('tipe') == 'kunjungan')
                    <table class="table table-hover table-striped">
                        <thead class="table-primary">
                            <tr>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Masuk</th>
                                <th>Keluar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reports as $kunjungan)
                            <tr>
                                <td>{{ $kunjungan->name }}</td>
                                <td>{{ $kunjungan->date }}</td>
                                <td>{{ $kunjungan->enter_at }}</td>
                                <td>{{ $kunjungan->out_at ?? '-' }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @elseif(request('tipe') == 'buku')
    <table class="table table-hover table-striped align-middle">
        <thead class="table-primary">
            <tr>
                <th>Cover</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
            @forelse($books as $book)
            <tr>
                <td>
                    @if($book->photo)
                        <img src="{{ asset('storage/' . $book->photo) }}" alt="Cover" class="img-thumbnail" style="width: 60px; height: 80px;">
                    @else
                        <span class="text-muted">-</span>
                    @endif
                </td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->publisher }}</td>
                <td>{{ $book->year }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center text-muted">Tidak ada data buku</td>
            </tr>
            @endforelse
        </tbody>
    </table>
                @else
                <table class="table table-hover table-striped">
    <thead class="table-primary">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reports as $user)
        <tr>
            <td>{{ $user->name ?? '-'}}</td>
            <td>{{ $user->email ?? '-'}}</td>
            <td>{{ $user->address ?? '-' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

                @endif
            </div>
        </div>
    </div>
</div>
@endsection
