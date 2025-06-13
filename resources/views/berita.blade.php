@extends('layouts.app')

@section('content')
<section id="berita" class="section bg-light">
  <div class="container" data-aos="fade-up">
    <div class="section-header text-center mb-5">
      <h2 class="section-title">Berita Terbaru</h2>
      <p class="section-subtitle">Informasi terkini seputar aktivitas dan inovasi Perpustakaan Daerah Subang</p>
    </div>
    <div class="row gy-4">
      <!-- Berita Pertama -->
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
        <div class="card h-100 border-0 shadow">
          <div class="card-img">
            <img src="{{ asset('assets/gambar1.jpg') }}" alt="Berita 1" class="img-fluid rounded-top">
          </div>
          <div class="card-body">
            <h5 class="card-title fw-bold text-dark">37 Ribu Orang Mengunjungi Perpustakaan Daerah Subang Selama Setahun</h5>
            <p class="card-text text-muted">
              Subang (ANTARA) - Dinas Kearsipan dan Perpustakaan Daerah Kabupaten Subang mencatat sebanyak 37 ribu orang mengunjungi perpustakaan daerah sepanjang Januari hingga Desember 2024.
              "Jika direrata sekitar 300 pengunjung ke perpustakaan daerah Subang," kata Kepala Dinas, Yeni Nuraeni.
              Kunjungan ini mencerminkan tingginya antusiasme masyarakat, meski fasilitas masih terbatas. Indeks Pembangunan Literasi Masyarakat (IPLM) pun naik jadi 58, target tahun depan mencapai 70.
            </p>
          </div>
        </div>
      </div>

      <!-- Berita Kedua -->
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div class="card h-100 border-0 shadow">
          <div class="card-img">
            <img src="{{ asset('assets/gambar2.jpg') }}" alt="Berita 2" class="img-fluid rounded-top">
          </div>
          <div class="card-body">
            <h5 class="card-title fw-bold text-dark">Peningkatan Layanan Digital di Perpustakaan Daerah Subang</h5>
            <p class="card-text text-muted">
              Subang (ANTARA) - Perpustakaan Daerah Subang terus berinovasi dengan meningkatkan layanan digital. Kini masyarakat bisa mengakses koleksi melalui aplikasi resmi.
              "Kami berusaha memberikan kemudahan akses literasi dengan layanan digital yang mudah diakses," ujar Yeni Nuraeni.
              Langkah ini diharapkan mampu meningkatkan minat baca, khususnya generasi muda.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
