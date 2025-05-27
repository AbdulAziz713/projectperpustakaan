@extends('layouts.app')

@section('content')
<section id="sejarah" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4 text-primary">Sejarah</h2>
    <div class="row">
      <div class="col-lg-6 mb-4">
        <p class="lead text-justify">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet urna sit amet massa vestibulum, id eleifend erat sodales. Duis vitae enim id libero faucibus convallis sed ac metus. Aenean quis est sem. Sed volutpat justo et ante feugiat, nec laoreet justo vehicula. Aliquam eu purus hendrerit, maximus elit id, fermentum turpis. Ut euismod libero sit amet tortor pharetra, nec facilisis eros dapibus. Curabitur nec bibendum neque, nec auctor orci.
        </p>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="text-center">
          <img src="{{ asset('assets/sejarah.jpeg') }}" alt="Gambar Sejarah" class="img-fluid rounded shadow-lg">
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
