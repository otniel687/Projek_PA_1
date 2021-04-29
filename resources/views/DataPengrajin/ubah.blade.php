@extends('layouts.main')

@section('title', 'Ubah Data Pengrajin')
    
@section('container')
    <div class="container">
        <br>
            <center><h1><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;UBAH DATA</h1></center>   
            <div class="hero rounded-3 px-5 pb-5 pt-5">
            <h4><a href="/pengrajin" class="badge bg-primary">Kembali</a></h4>
            <br>
                <form  enctype="multipart/form-data" action="/pengrajin/update/{{ $pengrajin->id }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" name="id_pengrajin" class="form-control" value="{{ $pengrajin->id_pengrajin }}">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $pengrajin->nama }}">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{ $pengrajin->alamat }}">
                    </div>
                    <div class="form-group">
                        <label>Kontak</label>
                        <input type="text" name="kontak" class="form-control" value="{{ $pengrajin->kontak }}">
                    </div>
                    <div class="form-group">
                        <label>Kerajinan</label>
                        <input type="text" name="kerajinan" class="form-control" value="{{ $pengrajin->kerajinan }}">
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control" value=" $pengrajin->foto">
                        <img src="{{asset('foto')}}/{{ $pengrajin->foto }}" alt="Foto Pengrajin" style="max-width:100px; margin-top:20px;">
                    </div>
                    <div class="form-group">
                    <br><br>
                        <button type="submit" class="btn btn-warning px-5">Ubah</button>
                    </div>
                </form>
            </div>
    </div>
@endsection