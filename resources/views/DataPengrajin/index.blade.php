@extends('layouts.main')

@section('title', 'Data Pengrajin')
    
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3">Data Pengrajin Desa Suhi-Suhi</h1>
                <br><br>
                <table class="table table-bordered table-striped" style="text-align:center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kontak</th>
                            <th scope="col">Kerajinan</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $suhi)
                        <tr>
                            <th scope='row'>{{ $suhi->id_pengrajin }}</th>
                            <td>{{ $suhi->nama }}</td>
                            <td>{{ $suhi->alamat }}</td>
                            <td>{{ $suhi->kontak }}</td>
                            <td>{{ $suhi->kerajinan }}</td>
                            <td><img width="200px"src="{{asset('foto')}}/{{ $suhi->foto }}" alt="not found"></td>
                            <td>
                                <a href="/pengrajin/ubah/{{ $suhi->id }}"><i class="far fa-edit btn btn-success"></i></a>
                                <a href="/pengrajin/hapus/{{ $suhi->id }}"><i class="fas fa-trash-alt btn btn-danger"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
