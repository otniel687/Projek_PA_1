<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="Icon" class="rounded-circle" href="{{asset('css/Image/logo.png')}} ">
    <title> @yield('title') | Desa Suhisuhi</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}} " rel="stylesheet" />
    <!--style CSS-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <!--Style Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
     <!--Fancy Box-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <!--Lightbox-->    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  </head>
  <body>
    <!--Navbar-->
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <img src="{{asset('css/image/logo.png')}} " class="rounded-circle" style="width: 100px;" alt="">
          <h3 class="navbar-brand" href="#">DESA SUHISUHI</h3>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{url('/')}} ">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/desa')}}">Tentang Desa</a>
              </li>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="{{asset('/ulos')}}">Ulos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/katalog')}} ">Katalog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/halamanpengrajin')}} ">Tentang Pengerajin</a>
              </li>
              <li class="nav-item">
                <a class="nav-item btn btn-info tombol" href="/login">Login Admin</a>
              </li>
            </ul>
          </div>
        </div>
        <br>
      </nav>
    </header>
    <!--Akhir Navbar-->

    <!--Header-->
    @yield('header')
    
    <!--Akhir Header-->

    <!--Content -->
    @yield('content')
    
    <!--Akhir content -->


    <!--Jenis-->
    @yield('jenis')
    
    <!--Akhir Jenis-->

    <!--Video -->
    @yield('video')

    <!--Akhir Video-->

     <!--Footer-->
     <section id="footer" class="bg-dark text-light">
      <div>
        <br> <br>
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-4" style="font-family: 'Caveat', cursive;font-family: 'Righteous', cursive; color: cornflowerblue; size:'7';">
              <font size='7'><p>UMKM website of Lumban Suhi-Suhi Village - since 2021!</p></font>
            </div>
            <link rel="preconnect" href="https://fonts.gstatic.com"><link href="https://fonts.googleapis.com/css2?family=Caveat&family=Righteous&display=swap" rel="stylesheet">
            <div class="col-md-1"></div>
            <div class="col-md-2" style="font-family: 'Caveat', cursive;font-family: 'Righteous', cursive;">
              
              <div class="referens">
              <h5>Link Terkait</h5><br>
              <p href="https://samosirkab.go.id/">Pemkab Samosir</p>
              <p href="https://www.indonesia.travel/id/id/home">Wonderful Indonesia</p>
              <p href="https://www.kemenparekraf.go.id/">kemenparekraf RI</p>
              <p href="https://www.del.ac.id/">IT Del</p>
            </div>

            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
              <a href="/kritik" class="btn btn-warning" style="width: 250px;">Kritik Dan Saran</a><br>
              <br>
              <a class="social mt-5" href="" target="_blank"><i class="bi bi-facebook m-3"></i></a>
              <a class="social mt-5" href="https://www.instagram.com/explore/locations/279052206/lumban-suhi-suhi-kabsamosir/?hl=id" target="_blank"><i class="bi bi-instagram"></i></i></a>
              <a class="social mt-5" href="" target="_blank"><i class="bi bi-whatsapp m-3"></i></a>
              <a class="social mt-5" href="" target="_blank"><i class="bi bi-telegram"></i></a>
            </div>
          </div>
        </div>
    <br><br><br>
    <center>
    <footer>           
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
    <!--Akhir Footer-->
    
    <script src="{{asset('js/bootstrap.bundle.min.js')}} "></script>
    <script src="{{asset('js/script.js')}} "></script>
    <script src="{{asset('js/KatalogScript.js')}} "></script>
  </body>
</html>
