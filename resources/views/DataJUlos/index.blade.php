@extends('layouts.main')

@section('title', 'Data Jenis Ulos')
    
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3">Data Jenis Ulos Desa Suhi-Suhi</h1>
                <br><br>
                <table class="table table-bordered table-striped" style="text-align:center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $ulos)
                        <tr>
                            <th scope='row'>{{ $ulos->id_jenis }}</th>
                            <td>{{ $ulos->nama }}</td>
                            <td>{{ $ulos->deskripsi }}</td>
                            <td>{{ $ulos->harga }}</td>
                            <td><img width="250px"src="{{asset('gambar')}}/{{ $ulos->gambar }}" alt="not found"></td>
                            <td>
                                <a href="/jenis/ubah/{{ $ulos->id }}"><i class="far fa-edit btn btn-success"></i></a>
                                <a href="/jenis/hapus/{{ $ulos->id }}"><i class="fas fa-trash-alt btn btn-danger"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
