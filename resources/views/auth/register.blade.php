@extends('layouts.app')

@section('content')
<section id="register" class="d-flex align-items-center justify-content-center my-5" style="min-height: 80vh;">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-primary text-white text-center rounded-top-4">
                        <h5 class="mb-0 fw-bold"><i class="fas fa-user-plus me-2"></i> Daftar Akun Pustakawan</h5>
                    </div>

                    <div class="card-body px-4 py-4">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input id="name" type="text"
                                    class="form-control rounded-3 @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autofocus>

                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input id="email" type="email"
                                    class="form-control rounded-3 @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required>

                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <input id="password" type="password"
                                    class="form-control rounded-3 @error('password') is-invalid @enderror"
                                    name="password" required>

                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password-confirm" class="form-label">Konfirmasi Kata Sandi</label>
                                <input id="password-confirm" type="password"
                                    class="form-control rounded-3"
                                    name="password_confirmation" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary rounded-3">
                                    <i class="fas fa-user-plus me-1"></i> Daftar Sekarang
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="card-footer text-center bg-light rounded-bottom-4 py-3">
                        Sudah punya akun?
                        <a href="{{ route('login') }}" class="text-decoration-none fw-semibold">Masuk di sini</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
