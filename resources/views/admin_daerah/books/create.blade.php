@extends('layouts.admin')

@section('content_admin')
<div class="card p-4">
    <h3 class="mb-4">Tambah Buku</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin_daerah.books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin_daerah.books.form', ['book' => null])
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
