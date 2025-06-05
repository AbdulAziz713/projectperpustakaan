@extends('layouts.admin')

@section('content_admin')
<div class="container py-4">
    <h1 class="h4 fw-bold text-primary mb-4">Tambah Pustakawan</h1>

    <form action="{{ route('admin_daerah.pustakawans.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin_daerah.pustakawans.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
