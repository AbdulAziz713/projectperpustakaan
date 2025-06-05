@extends('layouts.app')

@section('content')
<section class="section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-header bg-warning text-dark text-center rounded-top">
                        <h5 class="mb-0">{{ __('Konfirmasi Kata Sandi') }}</h5>
                    </div>

                    <div class="card-body bg-white">
                        <p class="text-muted text-center mb-4">
                            Silakan konfirmasi kata sandi Anda sebelum melanjutkan ke halaman selanjutnya.
                        </p>

                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Kata Sandi') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password">

                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-warning text-dark">
                                    <i class="fas fa-lock me-1"></i> {{ __('Konfirmasi') }}
                                </button>
                            </div>
                        </form>

                        @if (Route::has('password.request'))
                            <div class="text-center mt-3">
                                <a href="{{ route('password.request') }}" class="text-decoration-none">
                                    <i class="fas fa-question-circle me-1"></i> {{ __('Lupa Kata Sandi?') }}
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
