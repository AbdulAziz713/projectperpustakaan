@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Form Peminjaman</h1>

<form action="{{ route('pustakawan.borrowings.store') }}" method="POST" class="bg-white p-6 rounded-xl shadow-md">
    @csrf
    <div class="mb-4">
        <label class="block">Pilih Anggota</label>
        <select name="member_id" class="input">
            @foreach($members as $member)
            <option value="{{ $member->id }}">{{ $member->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label class="block">Pilih Buku</label>
        <select name="book_id" class="input">
            @foreach($books as $book)
            <option value="{{ $book->id }}">{{ $book->title }} (Stok: {{ $book->stock }})</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn-primary">Pinjam</button>
</form>

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
