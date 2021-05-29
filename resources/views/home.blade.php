@extends('layouts.app')
@section('title', 'PT. Mentol | Final Project LnT')

@section('content')
    @include('layouts.jumbotron')
    
    <div class="container mt-3">
        <div class="row">
            @foreach($barang as $data)
            <div class="col-xl-3 col-6">
                <div class="col-md-12 shadow-sm">
                    <img src="{{ asset('storage/images/barang/'.$data->foto_barang) }}" alt="{{ $data->nama_barang }}" class="w-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->nama_barang }}</h5>
                        <p class="card-text">Rp. {{ number_format($data->harga_barang) }}</p>
                        <a href="{{ route('showBarang', $data->id) }}" class="btn btn-primary text-white w-100">Lihat Selengkapnya <i class="uil uil-eye ms-1"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection