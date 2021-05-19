@extends('layouts.main')

@section('title', 'Data Pengrajin')
    
@section('container')
    <div class="container">
        <style>
            #info{
                float:right;
            }
        </style>
       <div class="row">
            <div class="col-12">
                <h1 class="mt-3">Data Pengrajin Desa Suhi-Suhi</h1>
                <div id="info">
                    <form method="GET">
                        <div class="info1container d-flex"><input type="search" id="cari" size="25" name="cari"class="form-control rounded-pill " style="font-family: Arial, FontAwesome;" value="{{Request::get('cari')}}" placeholder="Cari data">&nbsp;&nbsp;<button id="bcari" class="btn btn-outline-light rounded-circle" type="submit"><i class="fas fa-search"></i></button></div>
                    </form>
                </div> 
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
                            <th scope='row'>{{ $suhi->id }}</th>
                            <td>{{ $suhi->nama }}</td>
                            <td>{{ $suhi->alamat }}</td>
                            <td>{{ $suhi->kontak }}</td>
                            <td>{{ $suhi->kerajinan }}</td>
                            <td><img width="80px"src="{{asset('foto')}}/{{ $suhi->foto }}" alt="not found"></td>
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
@section('jscript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()-> has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()-> has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>
@endsection