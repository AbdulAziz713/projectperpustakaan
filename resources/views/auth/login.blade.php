@extends('layouts.app')

@section('content')
<section id="login" class="login section">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow border-0 rounded-4 p-4">
                    <div class="card-body">
                        <h2 class="text-center mb-4">{{ __('Halaman Masuk') }}</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Alamat Email') }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autofocus>

                                @error('email')
                                <div class="invalid-feedback">{{ 'Email atau password tidak sesuai!' }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Kata Sandi') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password" required>

                                @error('password')
                                <div class="invalid-feedback">{{ 'Email atau password tidak sesuai!' }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Ingat Saya') }}
                                </label>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Masuk') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="text-decoration-none" href="{{ route('password.request') }}">
                                    {{ __('Lupa Password?') }}
                                </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
                <p class="text-center mt-3">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="text-primary text-decoration-none">
                        Daftar di sini
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
