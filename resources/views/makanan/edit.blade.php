@extends('layouts.master')
@section('content')
<div class="container">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mie</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form method="post" enctype="multipart/form-data" action="{{ route('makanan.update', $makanan->id) }}">
        @csrf

            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Kode Mie</label>
                <div class="col-sm-10">
                <input type="text" class="col-sm-2 form-control" name="kode" id="kode" value="{{$makanan->id}}">
                </div>
            </div>
            <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Mie</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="nama" value="{{$makanan->nama_barang}}">
                </div>
            </div>
            <div class="form-group row">
            <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-5">
                <input type="file" name="gambar" id="gambar" value="{{ $makanan->gambar }}">
                </div>
            </div>
            <div class="form-group row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="harga" id="harga" value="{{$makanan->harga}}">
                </div>
            </div>
            <div class="form-group row">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="keterangan" id="keterangan" value="{{$makanan->keterangan}}">
                </div>
            </div>
            <div><button type="submit" class="btn btn-sm btn-primary">Simpan</button></div>
        </form>

    </section>
</div>
@endsection

