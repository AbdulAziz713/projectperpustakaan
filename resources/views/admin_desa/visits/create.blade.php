@extends('layouts.admin')

@section('content_admin')
<div class="container mx-auto py-6 px-4 max-w-xl">
    <h1 class="text-2xl font-bold text-blue-900 mb-6">
        {{ isset($visit) ? 'Edit Kunjungan' : 'Tambah Kunjungan' }}
    </h1>

    <form action="{{ isset($visit) ? route('admin_desa.visits.update', $visit) : route('admin_desa.visits.store') }}" method="POST" class="bg-white p-6 rounded shadow">
        @if(isset($visit))
            @method('PUT')
        @endif

        @include('admin_desa.visits._form')

        <button type="submit" class="btn btn-success">
            {{ isset($visit) ? 'Perbarui' : 'Simpan' }}
        </button>
        <a href="{{ route('admin_desa.visits.index') }}" class="btn btn-danger">Batal</a>
    </form>
</div>

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
