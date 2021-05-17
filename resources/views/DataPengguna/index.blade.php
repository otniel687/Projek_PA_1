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
                            <th scope="col">Nama</th>
                            <th scope="col">Kritik</th>
                            <th scope="col">Saran</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $ulos)
                        <tr>
                            <td scope='row'>{{ $ulos->nama }}</td>
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