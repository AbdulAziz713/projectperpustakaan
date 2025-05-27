@extends('layouts.app')

@section('content')
<section id="struktur-organisasi" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5 text-primary">Struktur Organisasi</h2>
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="text-center mb-4">
          <p class="lead text-secondary">Berikut adalah gambaran struktur organisasi yang menunjukkan hierarki dan pembagian tugas dalam organisasi kami.</p>
        </div>
        <div class="text-center">
          <img src="{{ asset('assets/organisasi.jpg') }}" class="img-fluid w-100 h-auto rounded shadow-lg" alt="Struktur Organisasi">
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
