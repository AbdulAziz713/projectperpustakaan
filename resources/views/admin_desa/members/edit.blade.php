@extends('layouts.admin')

@section('content_admin')
<h1 class="fs-3 fw-bold mb-4">Edit Anggota</h1>

<div class="bg-white p-4 rounded shadow-sm">
    <form action="{{ route('admin_desa.members.update', $member->member_id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" id="name" name="name" value="{{ old('name', $member->name ?? '') }}" class="form-control" required placeholder="Masukkan nama lengkap">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', $member->email ?? '') }}" class="form-control" required placeholder="Masukkan email">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Telepon</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone', $member->phone ?? '') }}" class="form-control" required placeholder="Masukkan nomor telepon">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Alamat</label>
            <textarea id="address" name="address" class="form-control" rows="3" required placeholder="Masukkan alamat lengkap">{{ old('address', $member->address ?? '') }}</textarea>
        </div>


        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
                <select name="status" class="form-select" required>
                    <option value="" disabled selected>Pilih status</option>
                    <option value="active" {{ old('status', $member->status ?? '') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="inactive" {{ old('status', $member->status ?? '') == 'Non-aktif' ? 'selected' : '' }}>Non-aktif</option>
                </select>
        </div>


        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success">
                <i class="bi bi-check-circle me-1"></i> Update
            </button>
        </div>
    </form>
</div>

@push('scripts')
<!-- SweetAlert2 & Bootstrap Icons (CDN jika belum ada) -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

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
                confirmButtonColor: '#0d6efd',
                cancelButtonColor: '#dc3545',
                confirmButtonText: 'Ya, lanjut!',
                cancelButtonText: 'Batal'
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
