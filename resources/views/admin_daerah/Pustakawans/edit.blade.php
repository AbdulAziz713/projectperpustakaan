@extends('layouts.admin')

@section('content_admin')
<div class="container py-4">
    <h1 class="h4 fw-bold text-primary mb-4">Edit Pustakawan</h1>

    <form action="{{ route('admin_daerah.pustakawans.update', $pustakawan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name', $pustakawan->name) }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required value="{{ old('email', $pustakawan->email) }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Password Baru (kosongkan jika tidak diubah)</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin_daerah.pustakawans.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
