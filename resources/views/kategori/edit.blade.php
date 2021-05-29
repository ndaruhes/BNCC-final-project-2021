@extends('layouts.app')
@section('title', $kategori->nama_kategori.' - Edit Kategori | PT. Mentol')

@section('content')
<div class="form-wrapper col-md-4">
    <h1>Edit Kategori</h1>
    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="">Nama Kategori</label>
            <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror"" placeholder="Masukkan nama kategori" name="nama_kategori" value="{{ $kategori->nama_kategori }}">
            @error('nama_kategori')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm text-white">Save</button>
    </form>
</div>
@endsection