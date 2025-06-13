<!DOCTYPE html>
<html lang="id">
    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ 'SIPERKA - Sistem Informasi Perpustakaan' }}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @if (Request::is('login') || Request::is('register') || Request::is('verify') || Request::is('password/confirm') || Request::is('password/reset') || Request::is('password/email'))
    @endif

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link href="{{ asset('apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('MediCio-1.0.0/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('MediCio-1.0.0/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('MediCio-1.0.0/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('MediCio-1.0.0/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('MediCio-1.0.0/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('MediCio-1.0.0/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    @stack('styles')

    <!-- Main CSS File -->
    <link href="{{ asset('MediCio-1.0.0/assets/css/main.css') }}" rel="stylesheet">
    @vite(['resources/css/main.css', 'resources/js/main.js'])

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="index-page">
<header id="header" class="header sticky-top">

        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-end">
                <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
                    <img src="{{ asset('assets/logo.png') }}" alt="">
                    <h1 class="sitename">SIPERKA</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                      @auth
                        <li>
                            @if (auth()->user()->role === 'petugas')
                                <a class="nav-link" href="{{ route('admin_desa.dashboard') }}">Dashboard</a>
                            @elseif (auth()->user()->role === 'admin')
                                <a class="nav-link" href="{{ route('admin_daerah.dashboard') }}">Dashboard</a>
                            @elseif (auth()->user()->role === 'anggota')
                                <a class="nav-link" href="{{ route('pustakawan.dashboard') }}">Dashboard</a>
                            @endif
                        </li>
                      @endauth
                      @guest
                      <li><a href="{{ url('/') }}">Beranda</a></li>
                      @endguest
                        <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a href="{{ route('struktur-organisasi') }}">Struktur Organisasi</a></li>
                                <li><a href="{{ route('sejarah') }}">Sejarah</a></li>
                                <li><a href="{{ route('unit-kerja') }}">Unit Kerja</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('layanan') }}">Layanan</a></li>
                        <li class="dropdown"><a href="#"><span>Aktivitas</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a href="{{ route('berita') }}">Berita</a></li>
                                <li><a href="{{ route('agenda') }}">Agenda</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Rekomendasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a href="{{ route('buku-terbaru') }}">Buku Terbaru</a></li>
                                <li><a href="{{ route('perpustakaan-terdekat') }}">Perpustakaan Terdekat</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                        @guest
                        <li>
            <form action="{{ route('login') }}" method="GET" class="d-inline">
                <button type="submit" class="btn btn-outline-success">
                    <i class="fas fa-sign-in-alt me-1"></i> Login
                </button>
            </form>
        </li>
        @else
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-danger">
                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                </button>
            </form>
        @endguest
        </li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>
        </div>
</header>

  <!-- Konten -->
  <main class="main">
    @yield('content')
    @if(session('login_success'))
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil Login!',
                            text: '{{ session("login_success") }}',
                            showConfirmButton: false,
                            timer: 3000
                        });
                    </script>
                @endif
  </main>
  <footer id="footer " class="footer light-background ">

    <div class="container footer-top ">
      <div class="row gy-4 ">
        <div class="col-lg-4 col-md-6 footer-about ">
          <a href="index.html " class="logo d-flex align-items-center ">
            <span class="sitename ">SIPERKA</span>
          </a>
          <div class="footer-contact pt-3 ">
            <p>Jl. Jend. Achmad Yani</p>
            <p>Pasirkareumbi, Kec. Subang</p>
            <p>Kabupaten Subang, Jawa Barat 41211</p>
            <p class="mt-3 "><strong>Telepon:</strong> <span>+62 882 1883 0417</span></p>
            <p><strong>Email:</strong> <span>perpus@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4 ">
            <a href=" "><i class="bi bi-twitter-x "></i></a>
            <a href=" "><i class="bi bi-facebook "></i></a>
            <a target="_blank" href="https://www.instagram.com/perpustakaan_subang/"><i class="bi bi-instagram "></i></a>
            <a href=" "><i class="bi bi-linkedin "></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links ">
          <h4>Menu</h4>
          <ul>
            <li><a href="{{ url('/') }}">Beranda</a></li>
            <li><a href="{{ route('struktur-organisasi') }}">Profile</a></li>
            <li><a href="{{ route('layanan') }}">Layanan</a></li>
            <li><a href="{{ route('berita') }}">Aktivitas</a></li>
            <li><a href="{{ route('buku-terbaru') }}">Rekomendasi</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links ">
          <h4>Layanan Kami</h4>
          <ul>
            <li><a href="# ">Web Design</a></li>
            <li><a href="# ">Web Development</a></li>
            <li><a href="# ">Product Management</a></li>
            <li><a href="# ">Marketing</a></li>
            <li><a href="# ">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links ">
          <h4>Layanan Gedung</h4>
          <ul>
            <li><a href="# ">Molestiae accusamus iure</a></li>
            <li><a href="# ">Excepturi dignissimos</a></li>
            <li><a href="# ">Suscipit distinctio</a></li>
            <li><a href="# ">Dilecta</a></li>
            <li><a href="# ">Sit quas consectetur</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links ">
          <h4>Jam Layanan</h4>
          <ul>
            <li><a href="# ">Ipsam</a></li>
            <li><a href="# ">Laudantium dolorum</a></li>
            <li><a href="# ">Dinera</a></li>
            <li><a href="# ">Trodelas</a></li>
            <li><a href="# ">Flexo</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4 ">
      <div class="credits ">
        Hak Cipta Dilindungi Undang-Undang &copy; {{ date('Y') }} <a target="_blank" href="https://polsub.ac.id">Politeknik Negeri Subang.</a>
      </div>
    </div>

  </footer>

<!-- Scroll Top -->
<a href="# " id="scroll-top " class="scroll-top d-flex align-items-center justify-content-center "><i class="bi bi-arrow-up-short "></i></a>

<!-- Preloader -->
<div id="preloader "></div>

<!-- Vendor JS Files -->
<script src="{{ asset('MediCio-1.0.0/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('MediCio-1.0.0/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('MediCio-1.0.0/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('MediCio-1.0.0/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('MediCio-1.0.0/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('MediCio-1.0.0/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('MediCio-1.0.0/assets/js/main.js') }}"></script>
</body>
</html>