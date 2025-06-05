@extends('layouts.admin')

@section('content_admin')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Kegiatan Masyarakat</h1>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin_desa.keterlibatan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Kegiatan</label>
                    <input type="text" name="judul" id="judul" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto Kegiatan (Maks 2MB)</label>
                    <input type="file" name="foto" id="foto" class="form-control">
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin_desa.keterlibatan.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Batal
                    </a>
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
