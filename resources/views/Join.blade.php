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
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}" >
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900"> 
        <link rel="stylesheet" href="fonts/icomoon/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Satisfy&display=swap" rel="stylesheet">
  <title>Join Pengrajin</title>
  <style>
    span{
        color: red;
    }
  </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="img/logo2.png" width="80px" alt="Logo">&nbsp;&nbsp;<b>Desa SuhiSuhi</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/desa">Tentang Desa</a>
              </li>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="/data_web1">Ulos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/katalog">Katalog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/halamanpengrajin">Tentang Pengrajin</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <section id="sopi" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8" style="font-family: 'Dancing Script', cursive;">
          <font size="7"><center>Join Us</center></font>
        </div>
      </div>
    </div>
  </section>
    <br>
    <div class="container-fluid">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <style>
      label, button{
        font-family: 'Concert One', cursive;
      }
    </style>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
            <div class="container card" style="width: 50rem;" class="hero rounded-3 px-5 pb-5 pt-5">
                <form enctype="multipart/form-data" action="/join/simpan" method="post">
                  @csrf
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" autocomplete="off" placeholder="Tuliskan nama anda">
                    </div>
                    @error('nama')
                            <div class="invalid-feedback">{{  $message }}</div>
                        @enderror

                    <div class="form-group mt-3">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" autocomplete="off" placeholder="Tuliskan alamat anda"></input>
                    </div>
                    @error('alamat')
                            <div class="invalid-feedback">{{  $message }}</div>
                        @enderror

                    <div class="form-group mt-3">
                        <label>Kontak</label>
                        <input type="text" name="kontak" class="form-control @error('kontak') is-invalid @enderror" value="{{ old('kontak') }}" autocomplete="off" placeholder="Tuliskan kontak yang dapat dihubungi"></input>
                    </div>
                    @error('kontak')
                            <div class="invalid-feedback">{{  $message }}</div>
                        @enderror

                    <div class="form-group mt-3">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" value="{{ old('foto') }}">
                    </div>
                    @error('foto')
                            <div class="invalid-feedback">{{  $message }}</div>
                        @enderror

                    <div class="form-group mt-3">
                    <label>Kerajinan yang dapat dibuatkan</label>
                    <select name="kerajinan" class="form-control @error('kerajinan') is-invalid @enderror" value="{{ old('kerajinan') }}">
                        <option value="">Pilih Keterampilan</option>
                        <option value="Ulos Batak Toba">Ulos Batak Toba</option>
                        <option value="Ulos Batak Karo">Ulos Batak Karo</option>
                        <option value="Ulos Batak Toba dan Karo (pewarna sintesis)">Ulos Batak Toba dan Karo (pewarna sintesis)</option>
                        <option value="Ulos Batak Toba dan Karo (pewarna alami)">Ulos Batak Toba dan Karo (pewarna alami)</option>
                    </select>
                    </div>
                    @error('kerajinan')
                            <div class="invalid-feedback">{{  $message }}</div>
                        @enderror

                    <br>
                    <div class="form-group mt-3">
                    <button type="submit" style="float: right;" class="btn btn-primary" style='font-size:16px'><i class='far fa-paper-plane'></i> Simpan</button>
                    </div>
                </form>
                <br>
            </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
              <div>
                <label><h4>Contact Us</h4></label>
                <br>
                    <div class="form-group mt-3">
                        <label><i class="fab fa-whatsapp"></i> Whatsapp</label>
                        <input type="text" name="kritik" class="form-control" value="" autocomplete="off" placeholder="+62822-7389-6001" disabled>
                    </div>
                    <div class="form-group mt-3">
                        <label><i class="fas fa-envelope-open-text"></i> Email</label>
                        <input type="text" name="kritik" class="form-control" value="" autocomplete="off" placeholder="raja.sondang@gmail.com" disabled>
                    </div>
                    <div class="form-group mt-3">
                        <label><i class="fas fa-sms"></i> SMS</label>
                        <input type="text" name="kritik" class="form-control" value="" autocomplete="off" placeholder="+62822-7389-6001" disabled>
                    </div>
                    <div class="form-group mt-3">
                        <label><i class="fal fa-phone-rotary"></i> Telepon</label>
                        <input type="text" name="kritik" class="form-control" value="" autocomplete="off" placeholder="+62822-7389-6001" disabled>
                    </div>
                </div>
        </div>
    </div>
    <br>
    <center>
    <footer  class="bg-dark text-light"> 
      <br>          
    <div>
            <div class="flex-c-m flex-w p-b-18">
                <a href="https://www.del.ac.id/" target="_blank" class="m-all-1">
                    <img alt="Logo IT Del" width="50" src="http://meatnauli.site/frontend/images/icons/itdel.png">
                </a>
                &nbsp;&nbsp;&nbsp;
                <a href="/" class="m-all-1">
                    <img alt="Logo Desa Suhi-Suhi" width="60" src="img/logo2.png">
                </a>
            </div>
            <br>
            <font size='2'>
            <p class="stext-107 cl6 txt-center">
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>| Website UMKM Desa Suhi-Suhi Oleh <a href="https://www.del.ac.id/" target="_blank">Kelompok 01 PA 1 - IT Del</a>
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