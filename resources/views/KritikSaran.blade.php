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
  <title>Kritik Saran</title>
  <style>
    span{
        color: red;
    }
    h1{
      color: yellowgreen;
    }
  </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
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
                <a class="nav-link" href="/ulos">Ulos</a>
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
    <hr>
    
    <section id="sopi" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8" style="font-family: 'Dancing Script', cursive; font-family: 'Satisfy', cursive;">
          <center><h1>Kritik dan Saran</h1></center>
        </div>
      </div>
    </div>
  </section>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-8">
            <div class="container card" style="width: 50rem;">
                <br>
                <form enctype="multipart/form-data" action="/kritik/simpan" method="post">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label>Kritik <span>*</span></label>
                        <textarea type="text" name="kritik" class="form-control" value="" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Saran <span>*</span></label>
                        <textarea type="text" name="saran" class="form-control" value="" cols="30" rows="5"></textarea>
                    </div>
                    <p><span>*</span>Wajib diisi</p>
                    <br>
                    <div class="form-group">
                    <button type="submit" class="btn btn-success" href="/">Simpan</button>
                    </div>
                    <br>
                </form>
            </div>
            </div>
        </div>
    </div>

    <br><br>
    <footer id="footer" class="bg-dark text-light">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
          </div>
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
            <p class="stext-107 cl6 txt-center">
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());

                </script>| Website UMKM Desa Suhi-Suhi Oleh <a href="https://www.del.ac.id/" target="_blank">Kelompok 01 PA 1 - IT Del</a>
                
            </p>
        </div>
      </div>
    </footer>

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