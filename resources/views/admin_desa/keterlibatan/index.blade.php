@extends('layouts.admin')

@section('content_admin')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Keterlibatan Masyarakat</h1>

    <a href="{{ route('admin_desa.keterlibatan.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus-circle"></i> Tambah Kegiatan
    </a>

    <div class="row">
        @forelse($kegiatan as $item)
            <div class="col-md-6 col-lg-4">
                <div class="card shadow mb-4">
                    @if($item->foto)
                        <img src="{{ asset($item->foto) }}" class="card-img-top" alt="Foto Kegiatan">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ $item->judul }}</h5>
                        <p class="card-text">{{ Str::limit($item->deskripsi, 100) }}</p>
                        <form action="{{ route('admin_desa.keterlibatan.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus kegiatan ini?')">
                            @csrf
                            @method('DELETE')
                            <!-- <button class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i> Hapus
                            </button> -->
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">
                    Belum ada kegiatan masyarakat yang ditambahkan.
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection
