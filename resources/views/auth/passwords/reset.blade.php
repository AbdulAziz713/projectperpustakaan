@extends('layouts.app')

@section('content')
<section class="section py-5">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow border-0 rounded-4">
                    <div class="card-header bg-primary text-white text-center rounded-top">
                        <h5 class="mb-0"><i class="bi bi-shield-lock-fill me-2"></i>{{ __('Atur Ulang Kata Sandi') }}</h5>
                    </div>

                    <div class="card-body bg-white p-4">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Alamat Email') }}</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ $email ?? old('email') }}" required autofocus>
                                </div>
                                @error('email')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Kata Sandi Baru') }}</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                           name="password" required>
                                </div>
                                @error('password')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password-confirm" class="form-label">{{ __('Konfirmasi Kata Sandi Baru') }}</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary rounded-pill">
                                    <i class="bi bi-arrow-repeat me-1"></i> {{ __('Atur Ulang Kata Sandi') }}
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="card-footer text-center bg-light rounded-bottom py-3">
                        <small class="text-muted">
                            Sudah ingat kata sandi? <a href="{{ route('login') }}" class="text-primary fw-semibold">Masuk</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
