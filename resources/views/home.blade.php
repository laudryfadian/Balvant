@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron bg-cover">
    <div class="overlay"></div>
    <div class="container">
      <h1 class="display-3 mb-1">Balvant Food & Bakery</h1>
      <p class="lead">Since <span>3 April 2021</span></p>
    </div>
  </div>

<div class="container">
    <div class="row justify-content-left">
        @foreach($barangs as $barang)
        <div class="col-md-4 mt-4">
            <div class="card">
              <img src="{{ url('uploads') }}/{{ $barang->gambar }}" width="500" height="300" class="card-img-top" alt="Image">
              <div class="card-body">
                <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                <p class="card-text">
                    <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                    
                    <hr>
                    <strong>Keterangan :</strong> <br>
                    {{ $barang->keterangan }} 
                </p>
                <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Pesan</a>
              </div>
            </div> 
        </div>
        @endforeach
    </div>
</div>
@endsection
