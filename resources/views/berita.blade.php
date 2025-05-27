@extends('layouts.app')

@section('content')
<section id="berita" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5" data-aos="fade-up">Berita Terbaru</h2>
    <div class="row g-4">
      <!-- Berita Pertama -->
      <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
        <div class="card h-100 shadow-sm border-0">
          <img src="{{ asset('assets/gambar1.jpg') }}" class="card-img-top rounded-top" alt="Gambar Berita 1">
          <div class="card-body">
            <h5 class="card-title fw-semibold">37 Ribu Orang Mengunjungi Perpustakaan Daerah Subang Selama Setahun</h5>
            <p class="card-text text-muted">
              Subang (ANTARA) - Dinas Kearsipan dan Perpustakaan Daerah Kabupaten Subang mencatat sebanyak 37 ribu orang mengunjungi perpustakaan daerah sepanjang Januari hingga Desember 2024.
              "Jika direrata sekitar 300 pengunjung ke perpustakaan daerah Subang," kata Kepala Dinas, Yeni Nuraeni.
              Kunjungan ini mencerminkan tingginya antusiasme masyarakat, meski fasilitas masih terbatas. Indeks Pembangunan Literasi Masyarakat (IPLM) pun naik jadi 58, target tahun depan mencapai 70.
            </p>
          </div>
        </div>
      </div>

      <!-- Berita Kedua -->
      <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
        <div class="card h-100 shadow-sm border-0">
          <img src="{{ asset('assets/gambar2.jpg') }}" class="card-img-top rounded-top" alt="Gambar Berita 2">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Peningkatan Layanan Digital di Perpustakaan Daerah Subang</h5>
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
