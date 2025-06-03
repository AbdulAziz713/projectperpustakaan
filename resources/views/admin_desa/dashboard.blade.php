@extends('layouts.admin')

@section('content_admin')
<div class="container-fluid">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-white shadow rounded p-4">
            <h2 class="text-lg font-semibold">Buku Desa</h2>
            <p class="text-2xl">{{ $booksTanggulun }}</p>
        </div>

        <div class="bg-white shadow rounded p-4">
            <h2 class="text-lg font-semibold">Total Stok</h2>
            <p class="text-2xl">{{ $totalStockTanggulun }}</p>
        </div>

        <div class="bg-white shadow rounded p-4">
            <h2 class="text-lg font-semibold">Buku Masuk Bulan Ini</h2>
            <p class="text-2xl">{{ $booksThisMonth }}</p>
        </div>
    </div>
</div>
@endsection