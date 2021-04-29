@extends('layouts.main')

@section('title', 'Kritik dan saran')
    
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3">Kritik dan Saran</h1>
                <br><br>
                <table class="table table-bordered table-striped" style="text-align:center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kritik</th>
                            <th scope="col">saran</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $ulos)
                        <tr>
                            <th scope='row'>{{ $ulos->id_pengguna }}</th>
                            <td>{{ $ulos->nama }}</td>
                            <td>{{ $ulos->kritik  }}</td>
                            <td>{{ $ulos->saran }}</td>
                            <td>
                                <a href="/kritiksaran/hapus/{{ $ulos->id }}"><i class="fas fa-trash-alt btn btn-danger"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
