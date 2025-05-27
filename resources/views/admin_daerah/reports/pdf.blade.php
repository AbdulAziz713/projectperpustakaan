<h2>Laporan</h2>

@if($tipe === 'anggota')
    <table width="100%" border="1" cellspacing="0" cellpadding="4">
        <thead>
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
                <td>{{ \Carbon\Carbon::parse($anggota->created_at)->format('d-m-Y') }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@elseif($tipe === 'kunjungan')
    <table width="100%" border="1" cellspacing="0" cellpadding="4">
        <thead>
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
                <td>{{ \Carbon\Carbon::parse($kunjungan->date)->format('d-m-Y') }}</td>
                <td>{{ $kunjungan->enter_at }}</td>
                <td>{{ $kunjungan->out_at ?? '-' }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <table width="100%" border="1" cellspacing="0" cellpadding="4">
        <thead>
            <tr>
                <th>Nama Anggota</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
            </tr>
        </thead>
        <tbody>
        @foreach($reports as $report)
            <tr>
                <td>{{ $report->user?->name ?? '-' }}</td>
                <td>{{ $report->book?->title ?? '-' }}</td>
                <td>{{ \Carbon\Carbon::parse($report->borrowed_at)->format('d-m-Y') }}</td>
                <td>{{ $report->returned_at ? \Carbon\Carbon::parse($report->returned_at)->format('d-m-Y') : '-' }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif
