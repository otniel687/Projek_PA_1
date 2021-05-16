<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

        <!-- Icon -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/sstyle.css') }}" >
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap" rel="stylesheet">
  
  <title>Ubah Data Jenis ULos</title>
  <style>
    h1{
      color:whitesmoke;
    }
  </style>
  </head>
  <body style='background-image: url("{{asset('img/bg1.jpeg')}}");'>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/"><b>Desa SuhiSuhi</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/pengrajin">Pengrajin</a>
                <a class="nav-link active" aria-current="page" href="/jenis">Jenis_Ulos</a>
                <a class="nav-link active" aria-current="page" href="/kritiksaran">Kritik dan Saran</a>
            </div>
            </div>
            <div class="navbar2">
            <div class="d-flex">
                            <li>
                                <a  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div >
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
            </div>
            </div>
        </div>
    </nav>

    <div class="container">
    <style>
        label{
            color:black;
        }
    </style>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <center><h1>UBAH DATA</h1></center>   
            <div class="hero rounded-3 px-5 pb-5 pt-5">
            <h4><a href="/jenis" class="badge bg-primary">Kembali</a></h4>
                <form  enctype="multipart/form-data" action="/jenis/update/{{ $ulos->id }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group mt-3">
                        <label>ID</label>
                        <input type="text" name="id_jenis" class="form-control" value="{{ $ulos->id_jenis }}">
                    </div>
                    <div class="form-group  mt-3">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $ulos->nama }}">
                    </div>
                    <div class="form-group  mt-3">
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" value="{{ $ulos->deskripsi }}">
                    </div>
                    <div class="form-group  mt-3">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control" value="{{ $ulos->harga }}">
                    </div>
                    <div class="form-group  mt-3">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control" value=" $ulos->gambar">
                        <img src="{{asset('gambar')}}/{{ $ulos->gambar }}" alt="Gambar Jenis Ulos" style="max-width:100px; margin-top:20px;">
                    </div>
                    <div class="form-group">
                    <br><br>
                        <button style="float: right;" type="submit" class="btn btn-warning px-4">Ubah</button>
                    </div>
                </form>
            </div>
    </div>
            </div>
        </div>
    <center>
    <br>
    <footer  class="bg-dark text-light"> 
    <br>
            <font size='2'>
            <p class="stext-107 cl6 txt-center">
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script> | Website UMKM Desa Suhi-Suhi Oleh <a href="https://www.del.ac.id/" target="_blank">Kelompok 01 PA 1 - IT Del</a>
            </p>
            </font>
        </div>
    </footer>
    </center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>