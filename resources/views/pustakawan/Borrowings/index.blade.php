@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Peminjaman Buku</h1>

<a href="{{ route('pustakawan.borrowings.create') }}" class="btn-primary mb-4">Pinjam Buku</a>

<table class="min-w-full bg-white">
    <thead>
        <tr>
            <th class="px-4 py-2">Nama Anggota</th>
            <th class="px-4 py-2">Judul Buku</th>
            <th class="px-4 py-2">Tanggal Pinjam</th>
            <th class="px-4 py-2">Tanggal Kembali</th>
        </tr>
    </thead>
    <tbody>
    @foreach($reports as $report)
    <tr>
        <td class="px-4 py-2">{{ $report->users?->name ?? 'N/A' }}</td>
        <td class="px-4 py-2">{{ $report->books?->title ?? 'N/A' }}</td>
        <td class="px-4 py-2">{{ $report->borrowed_at->format('d M Y') }}</td>
        <td class="px-4 py-2">
    {{ $report->borrowed_at ? $report->borrowed_at->format('d M Y') : 'N/A' }}
</td>
<td class="px-4 py-2">
    {{ $report->returned_at ? $report->returned_at->format('d M Y') : '-' }}
</td>

    </tr>
    @endforeach
    </tbody>
</table>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const deleteForms = document.querySelectorAll('.delete-form');
    deleteForms.forEach(function(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Yakin?',
                text: "Tindakan ini tidak bisa dibatalkan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, lanjut!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
});
</script>
@endpush
@endsection