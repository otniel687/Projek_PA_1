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
    <section id="header-ulos" class=" d-flex align-items-center">
      <div class="container p-4 p-md-5 mb-4 text-white rounded" style="color: #fff;  background-size: cover;">
        <div class="col-md-6 px-0">
          <h1 class="display-4 fst-italic">Something Special About The Batak Culture.</h1>
          <p class="lead my-3">
            Ulos adalah barang yang sangat penting bagi suku batak, kain ulos 
            adalah salah satu busana khas Indonesia. Dari bahasa asalnya, ulos berarti kain. 
            Ulos secara turun temurun dikembangkan oleh masyarakat Batak, Sumatra Utara. </p>
        </div>
      </div>
    </section>
    <!--Akhir Header-->

    <!--Content-->
    <section id="content_ulos">
        <div class="container">
            <div class="row justify_content-start">
                <div class="col-md-2">
                    <h3>Ulos Batak</h3>
                </div>
                <div class="col-md-4">
                    <a href="{{url('/ulos/batak')}}" class="btn btn-secondary" >Jelajahi Sekarang</a>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 text-center m-3 d-flex justify-content-center">
          <div class="col">
            <div class="card mb-4 shadow-sm">
             
              <div class="card figure">
                <img class="img-fluib" src="gambar/ragi_idup.jpeg" alt="" />
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 shadow-sm">
             
              <div class="card figure">
                <img class="img-fluib" src="gambar/mangiring.jpeg" alt="" />
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 shadow-sm">
             
              <div class="card figure">
                <img class="img-fluib" src="gambar/ragi_hotang.jpeg" alt="" />
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="container">
            <div class="row justify_content-start">
                <div class="col-md-2">
                    <h3>Ulos Karo</h3>
                    
                </div>
                <div class="col-md-4">
                    <a href="{{asset('/ulos/karo')}}" class="btn btn-secondary" >Jelajahi Sekarang</a>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 text-center d-flex justify-content-center m-3">
          <div class="col">
            <div class="card mb-4 shadow-sm">
             
              <div class="card figure">
                <img class="img-fluib" src="Image/arinteneng.jpeg" alt="" />
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 shadow-sm">
             
              <div class="card figure">
                <img class="img-fluib" src="Image/gatip.jpeg" alt="" />
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 shadow-sm">
             
              <div class="card figure">
                <img class="img-fluib" src="image/beka_buluh.jpg" alt="" />
              </div>
            </div>
          </div>
          
        </div>
        </div>
    </section>
    <!--Akhir Content-->
    
    <!--Proses-->
    <section id="prosesb" class="gambarb">
      <div class="container">
        <div class="row">
          <div class="col">
            <h3 class="text-center">Proses Pembuatan Ulos</h3>
          </div>

          <div class="row">
            <div class="col">
              <p>
                <span class="tab"></span>Ulos yang dari bahasa asalnya adalah kain, merupakan salah satu bahan busana asli Indonesia. 
                Kain Ulos merupakan Kain khas yang berasal dari Indonesia khususnya Sumatera Utara yang ditenun dengan dominasi warna merah, 
                hitam, dan putih yang dihiasi oleh tenunan benang emas, perak, atau main-manik berwarna. Dibalik warnanya yang bervariasi, 
                pembuatan ulos membutuhkan proses yang panjang. Berikut tahap-tahap dalam pembuatan ulos:

              </p>
            </div>
          </div>

            @foreach( $data as $ulos)
              <h4>{{ $ulos->judul }}</h4>
              <p>{{ $ulos->informasi}}</p>
              <img src="image/{{ $ulos->gambar }}" alt="">

              @endforeach

            </div>
          </div>

          
    </section>
    <!--Akhir Proses-->

    <!--Video -->
    <section id="video">
      <div class="container">
        <div class="row">
          <div class="col">
            <h3 class="text-center">Video</h3>
          </div>
        </div>
        <div class="row row-cols-1 m-auto mt-3 d-flex justify-content-center">
          <div class="col me">
            <video controls class="rounded mx-auto d-block">
              <source src="video/ulos.mp4" type="video/mp4" />
            </video>
          </div>
          </div>
      </div>
    </section>
    <!--Akhir Video-->

     <!--Footer-->
     <section id="footer" class="bg-dark text-light">
      <div class="row" style="margin-bottom: 70px; margin-top: 35px">
        <div class="col-md-1"></div>
        <div class="col-md-4" style="color: cornflowerblue; size:'7';">
          <font size='7'><p>UMKM website of Lumban Suhi-Suhi Village </p></font>
        </div>
        <link rel="preconnect" href="https://fonts.gstatic.com"><link href="https://fonts.googleapis.com/css2?family=Caveat&family=Righteous&display=swap" rel="stylesheet">
        <div class="col-md-3" style="">
          <div class="referens">
          <h2 style="color:darkcyan">Link Terkait</h2><br>
            <h5><a href="https://samosirkab.go.id/">Pemkab Samosir</a></h5><br>
            <h5><a href="https://www.indonesia.travel/id/id/home">Wonderful Indonesia</a></h5><br>
            <h5><a href="https://www.kemenparekraf.go.id/">kemenparekraf RI</a></h5><br>
            <h5><a href="https://www.del.ac.id/">IT Del</a></h5>
              </div>
        </div>
        <div class="col-md-3">
          <a href="/kritik" class="btn btn-warning" style="width: 250px">Kritik Dan Saran</a><br>
          <br>
          <a class="social mt-5" href="https://web.facebook.com/search/top?q=desa%20lumban%20suhi-suhi" target="_blank"><i class="bi bi-facebook m-3"></i></a>
          <a class="social mt-5" href="https://www.instagram.com/explore/locations/279052206/lumban-suhi-suhi-kabsamosir/?hl=id" target="_blank"><i class="bi bi-instagram"></i></i></a>
          <a class="social mt-5" href="https://web.whatsapp.com/" target="_blank"><i class="bi bi-whatsapp m-3"></i></a>
          <a class="social mt-5" href="https://web.telegram.org" target="_blank"><i class="bi bi-telegram"></i></a>
        </div>
      </div>
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
    </section>
    <!--Akhir Footer-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
