@extends('layouts.main')

@section('title', 'Ubah Data Jenis ULos')
    
@section('container')
    <div class="container">
        <br>
            <center><h1><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;UBAH DATA</h1></center>   
            <div class="hero rounded-3 px-5 pb-5 pt-5">
            <h4><a href="/produk" class="badge bg-primary">Kembali</a></h4>
            <br>
                <form  enctype="multipart/form-data" action="/jenis/update/{{ $ulos->id }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" name="id_jenis" class="form-control" value="{{ $ulos->id_jenis }}">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $ulos->nama }}">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" value="{{ $ulos->deskripsi }}">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control" value="{{ $ulos->harga }}">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control" value=" $ulos->gambar">
                        <img src="{{asset('gambar')}}/{{ $ulos->gambar }}" alt="Gambar Jenis Ulos" style="max-width:100px; margin-top:20px;">
                    </div>
                    <div class="form-group">
                    <br><br>
                        <button type="submit" class="btn btn-warning px-5">Ubah</button>
                    </div>
                </form>
            </div>
    </div>
@endsection