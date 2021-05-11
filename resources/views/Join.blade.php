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
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Satisfy&display=swap" rel="stylesheet">
  <title>Join Pengrajin</title>
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

    <div class="container">
        <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
        <br><br>
            <h1>Join Us</h1>
            <div>
                <br>
                <form enctype="multipart/form-data" action="/kritik/simpan" method="post">
                  @csrf
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label>Alamat <span>*</span></label>
                        <input type="text" name="kritik" class="form-control" value=""></input>
                    </div>
                    <div class="form-group">
                        <label>Kontak <span>*</span></label>
                        <input type="text" name="saran" class="form-control" value=""></input>
                    </div>
                    <div class="form-group">
                        <label>Foto <span>*</span></label>
                        <input type="file" name="saran" class="form-control" value=""></input>
                    </div><br>
                    <div>
                    <label for="cars">Kerajinan yang dapat dibuatkan</label>
                        <select name="kerajinan">
                        <option>Ulos Batak Toba</option>
                        <option>Ulos Batak Karo</option>
                        <option>Ulos Batak Toba dan Karo (pewarna sintesis)</option>
                        <option>Ulos Batak Toba dan Karo (pewarna alami)</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                    <br>
                </form>
            </div>
            </div>

            <div class="col-md-1" style="background-color: coral;"></div>
            <div class="col-md-4">
            <br><br>
            <h1>Contact Us</h1>
                <div class="form-group">
                    <label></label>
                    <input type="text" name="nama" class="form-control" value="">
                </div>

            </div>


        </div>
    </div>

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