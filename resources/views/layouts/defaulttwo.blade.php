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
          <img src="{{asset('css/image/logo.png')}} " class="rounded-circle" style="width: 30px;" alt="">
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
                <a class="nav-item btn btn-primary tombol" href="/login">Login</a>
              </li>
            </ul>
          </div>
        </div>
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
      <div class="container">

          <div class="row mt-5 ">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <h2>Desa Suhisuhi</h2>
              <p>
              <span class="tab"></span> Website ini  bertujuan untuk Mempromosikan Desa dan UMKM Desa Suhisuhi. <br><br>
              </p> 
            </div>

            <div class="referens col-md-6 col-sm-6 col-xs-12 mb-4">
              <h2>Link Terkait</h2>
              <a href="https://samosirkab.go.id/">Pemerintah Kabupaten Samosir</a><br>
              <a href="https://www.indonesia.travel/id/id/home">Wonderful Indonesia</a><br>
              <a href="https://www.kemenparekraf.go.id/">Kementrian Parawisata dan Ekonomi Kreatif RI</a><br>
              <a href="https://www.del.ac.id/">IT Del</a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 mb-5">
              <a href="" class="btn btn-secondary" style="width: 250px;">Kritik Dan Saran</a><br>
              <a class="social mt-5" href="" target="_blank"><i class="bi bi-facebook m-3"></i></a>
              <a class="social mt-5" href="https://www.instagram.com/explore/locations/279052206/lumban-suhi-suhi-kabsamosir/?hl=id" target="_blank"><i class="bi bi-instagram"></i></i></a>
              <a class="social mt-5" href="" target="_blank"><i class="bi bi-whatsapp m-3"></i></a>
              <a class="social mt-5" href="" target="_blank"><i class="bi bi-telegram"></i></a>
            </div>
          </div>
      </div>
     
    </section>
    <!--Akhir Footer-->
    
    <script src="{{asset('js/bootstrap.bundle.min.js')}} "></script>
    <script src="{{asset('js/script.js')}} "></script>
    <script src="{{asset('js/KatalogScript.js')}} "></script>
  </body>
</html>
