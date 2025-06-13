@extends('layouts.app')

@section('content')
<section id="sejarah" class="section bg-light">
  <div class="container" data-aos="fade-up">
    <div class="section-header text-center mb-5">
      <h2 class="section-title text-primary">Sejarah</h2>
      <p class="section-subtitle">Perjalanan dan perkembangan Perpustakaan Daerah Subang dari masa ke masa</p>
    </div>
    <div class="row gy-4 align-items-center">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
        <p class="lead text-justify">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet urna sit amet massa vestibulum, id eleifend erat sodales. Duis vitae enim id libero faucibus convallis sed ac metus. Aenean quis est sem. Sed volutpat justo et ante feugiat, nec laoreet justo vehicula. Aliquam eu purus hendrerit, maximus elit id, fermentum turpis. Ut euismod libero sit amet tortor pharetra, nec facilisis eros dapibus. Curabitur nec bibendum neque, nec auctor orci.
        </p>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div class="text-center">
          <img src="{{ asset('assets/sejarah.jpeg') }}" alt="Gambar Sejarah" class="img-fluid rounded shadow">
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
