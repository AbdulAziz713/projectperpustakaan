@extends('layouts.admin')

@section('content_admin')
<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 fw-bold text-primary"><i class="fas fa-users"></i> Data Anggota</h1>
        <a href="{{ route('admin_desa.members.create') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-user-plus"></i> Tambah Anggota
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white">
            <h6 class="m-0 fw-semibold">Daftar Anggota Terdaftar</h6>
        </div>
        <div class="card-body p-0">
            @if($members->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover align-middle text-center mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($members as $member)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->email }}</td>
                            <td>{{ $member->phone }}</td>
                            <td>{{ $member->address }}</td>
                            <td>
                                @if($member->status === 'active')
                                    <span class="badge bg-success">Aktif</span>
                                @else
                                    <span class="badge bg-secondary">Tidak Aktif</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin_desa.members.edit', $member->member_id) }}" class="btn btn-sm btn-info text-white me-1">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <!-- <button type="button" class="btn btn-sm btn-danger delete-btn" data-id="{{ $member->member_id }}">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </button> -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
                <div class="p-4 text-center">
                    <div class="alert alert-info mb-0">
                        <i class="fas fa-info-circle me-2"></i> Belum ada anggota yang terdaftar.
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function() {
                const memberId = this.dataset.id;
                Swal.fire({
                    title: 'Yakin ingin menghapus anggota ini?',
                    text: 'Tindakan ini tidak bisa dibatalkan!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch(`/admin_desa/members/${memberId}`, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Accept': 'application/json'
                            }
                        }).then(response => {
                            if (response.ok) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil!',
                                    text: 'Data anggota telah dihapus.',
                                    timer: 1500,
                                    showConfirmButton: false
                                }).then(() => {
                                    location.reload();
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal!',
                                    text: 'Terjadi kesalahan saat menghapus data.'
                                });
                            }
                        });
                    }
                });
            });
        });
    });
</script>
@endpush
@endsection
