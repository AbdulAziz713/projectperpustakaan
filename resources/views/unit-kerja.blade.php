@extends('layouts.app')

@section('content')
<section id="unit-kerja" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5 text-primary">Unit Kerja SIPERKA</h2>
    <div class="row g-4">
      <!-- Unit Data Pustakawan -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm border-0 hover-card">
          <div class="card-body text-center">
            <div class="mb-3">
              <i class="bi bi-person-badge-fill text-primary fs-2"></i>
            </div>
            <h5 class="card-title fw-bold">Data Pustakawan</h5>
            <p class="card-text text-secondary">Mengelola data pustakawan di setiap desa dan kecamatan.</p>
          </div>
        </div>
      </div>
      
      <!-- Unit Data Buku -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm border-0 hover-card">
          <div class="card-body text-center">
            <div class="mb-3">
              <i class="bi bi-book-fill text-success fs-2"></i>
            </div>
            <h5 class="card-title fw-bold">Data Buku</h5>
            <p class="card-text text-secondary">Mengelola koleksi buku dan literatur di perpustakaan.</p>
          </div>
        </div>
      </div>
      
      <!-- Unit Sarana dan Prasarana -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm border-0 hover-card">
          <div class="card-body text-center">
            <div class="mb-3">
              <i class="bi bi-building-fill text-warning fs-2"></i>
            </div>
            <h5 class="card-title fw-bold">Sarana & Prasarana</h5>
            <p class="card-text text-secondary">Mencatat dan mengelola fasilitas pendukung perpustakaan.</p>
          </div>
        </div>
      </div>
      
      <!-- Unit Lokasi Perpustakaan -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm border-0 hover-card">
          <div class="card-body text-center">
            <div class="mb-3">
              <i class="bi bi-geo-alt-fill text-danger fs-2"></i>
            </div>
            <h5 class="card-title fw-bold">Lokasi Perpustakaan</h5>
            <p class="card-text text-secondary">Memetakan lokasi dan jumlah perpustakaan desa.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .hover-card:hover {
    transform: translateY(-5px);
    transition: all 0.3s ease-in-out;
  }
</style>
@endsection
