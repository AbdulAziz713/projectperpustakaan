@extends('layouts.admin')

@section('content_admin')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        {{-- Anda bisa menambahkan tombol aksi di sini jika perlu --}}
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
        </a> --}}
    </div>

    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Buku Desa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $booksTanggulun }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-landmark fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Buku</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalStockTanggulun }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Total Buku Bulan Ini</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $booksThisMonth }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-cubes fa-2x text-gray-300"></i> {{-- Atau fas fa-archive --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    {{-- Di sini Anda bisa menambahkan konten dashboard lainnya seperti chart atau tabel --}}
    {{-- Contoh:
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Chart Contoh</h6>
                </div>
                <div class="card-body">
                    <p>Isi chart di sini...</p>
                     <div class="chart-area">
                        <canvas id="myAreaChart"></canvas> // Pastikan ID ini unik dan diinisialisasi di JS
                    </div>
                </div>
            </div>
        </div>
    </div>
    --}}

</div>
@endsection