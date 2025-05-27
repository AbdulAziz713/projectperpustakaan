@extends('layouts.app')

@section('content')
<section id="layanan" class="py-5 bg-light">
  <div class="container" data-aos="fade-up">
    <h2 class="text-center mb-5 text-primary">Layanan Perpustakaan Daerah Kabupaten Subang</h2>
    <div class="row gy-4">
      <!-- Layanan Sirkulasi -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0 hover-card text-center p-3">
          <div class="card-body">
            <div class="mb-3">
              <i class="bi bi-book-fill text-primary fs-1"></i>
            </div>
            <h5 class="card-title fw-bold">Layanan Sirkulasi</h5>
            <p class="card-text text-secondary">Peminjaman dan pengembalian buku secara mudah dan cepat.</p>
          </div>
        </div>
      </div>

      <!-- Layanan Rujukan -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0 hover-card text-center p-3">
          <div class="card-body">
            <div class="mb-3">
              <i class="bi bi-journal-text text-success fs-1"></i>
            </div>
            <h5 class="card-title fw-bold">Layanan Rujukan</h5>
            <p class="card-text text-secondary">Bantuan menemukan informasi dan referensi yang dibutuhkan.</p>
          </div>
        </div>
      </div>

      <!-- Perpustakaan Keliling -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0 hover-card text-center p-3">
          <div class="card-body">
            <div class="mb-3">
              <i class="bi bi-truck text-warning fs-1"></i>
            </div>
            <h5 class="card-title fw-bold">Perpustakaan Keliling</h5>
            <p class="card-text text-secondary">Menjangkau lebih banyak lokasi dengan layanan perpustakaan keliling.</p>
          </div>
        </div>
      </div>

      <!-- Bulk Loan -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0 hover-card text-center p-3">
          <div class="card-body">
            <div class="mb-3">
              <i class="bi bi-box-seam text-danger fs-1"></i>
            </div>
            <h5 class="card-title fw-bold">Bulk Loan (Paket Buku)</h5>
            <p class="card-text text-secondary">Penyediaan paket buku untuk pinjaman jangka waktu tertentu.</p>
          </div>
        </div>
      </div>

      <!-- Penelusuran Informasi -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0 hover-card text-center p-3">
          <div class="card-body">
            <div class="mb-3">
              <i class="bi bi-search text-info fs-1"></i>
            </div>
            <h5 class="card-title fw-bold">Penelusuran Informasi</h5>
            <p class="card-text text-secondary">Membantu menelusuri informasi atau bahan perpustakaan.</p>
          </div>
        </div>
      </div>

      <!-- Penyebaran Informasi Terseleksi -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0 hover-card text-center p-3">
          <div class="card-body">
            <div class="mb-3">
              <i class="bi bi-bell-fill text-secondary fs-1"></i>
            </div>
            <h5 class="card-title fw-bold">Penyebaran Informasi Terseleksi</h5>
            <p class="card-text text-secondary">Menyediakan informasi penting yang dipilih sesuai kebutuhan pengguna.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@push('styles')
<style>
  .hover-card {
    transition: transform 0.3s ease-in-out;
  }

  .hover-card:hover {
    transform: translateY(-5px);
  }
</style>
@endpush
@endsection
