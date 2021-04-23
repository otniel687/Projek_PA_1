<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="Icon" class="rounded-circle" href="css/Image/logo.png">
    <title>Ulos Batak Toba | Desa Suhisuhi</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!--style CSS-->
    <link rel="stylesheet" href="css/style.css" />

    <!--Style Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />

    <!--Fancy Box-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
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
                <a class="nav-link " aria-current="page" href="{{asset('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset('/desa')}}">Tentang Desa</a>
              </li>
               <li class="nav-item">
                <a class="nav-link active" href="{{asset('/ulos')}}">Ulos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset('/katalog')}} ">Katalog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset('/pengrajin')}} ">Tentang Pengerajin</a>
              </li>
              <li class="nav-item">
                <a class="nav-item btn btn-primary tombol" href="login.html">Login</a>
              </li>
            </ul>
          </div>
        </div>
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
                <img class="img-fluib" src="Image/ragi_idup.jpeg" alt="" />
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 shadow-sm">
             
              <div class="card figure">
                <img class="img-fluib" src="Image/mangiring.jpeg" alt="" />
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 shadow-sm">
             
              <div class="card figure">
                <img class="img-fluib" src="image/ragi_hotang.jpeg" alt="" />
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

          <div class="row jarak">
            <h4>1. Pembuatan benang</h4>
          </div>
          <div class="row g-1">
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="">
                <img src="image/proses1.jpeg" alt="" class="rounded mx-auto d-block" />
              </div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
              <p >
                <span class="tab"></span> Pada tahap awal, Kapas yang telah diperoleh kemudian digulung (dalam masyarakat batak dulu disebut "bebe") 
                agar kapas mengembang dan mempermudah pemintalan. Lalu Pemintalan kapas (dalam masyarakat batak dulu disebut "mampis") dengan nama 
                bernama "sorha" (roda, alat pemintal benang). Pemintalan minimal harus dilakukan dua orang dimana satu orang memintal benang dan satu 
                orang lainnya memutar sorha.
              </p>
            </div>
          </div>

          <div class="row jarak">
            <h4>2. Pewarnaan benang</h4>
          </div>
          <div class="row g-1">
             <div class="col-md-4 col-sm-12 col-xs-12 ">
              <div class="">
                <img src="image/proses2.jpeg" alt="" class="rounded mx-auto d-block">
              </div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
              <p >
                <span class="tab"></span> Selanjutnya benang diwarnai untuk memperoleh  warna merah (manubar) dan hitam (mansop). Bahan pewarna yang 
                digunakan terbuat dari daun-daunan berbagai jenis yang sebelumnya telah difermentasi untuk menghasilkan warna yang diinginkan.
              </p>
            </div>
          </div>

          <div class="row jarak">
            <h4>3. Gatip (Pengikatan)</h4>
          </div>
          <div class="row g-1">
            <div class="col">
              <p >
                <span class="tab"></span>Sebelum pembuatan ulos dimulai, motif khusus pada ulos dibuat terlebih dahulu menggunakan benang standar yang 
                belum berwarna (putih) yang diikat dengan bahan pengikat terdiri atas serat dan daun serai.
              </p>
            </div>
          </div>
          <div class="row jarak">
            <h4> 4. Unggas (Pencerahan Benang)</h4>
          </div>
          <div class="row g-1">
            <div class="col">
              <p >
                <span class="tab"></span>Benang yang baru selesai ditubar atau disop biasanya berwarna kusam sehingga perlu diunggas untuk memberi kesan 
                yang lebih cemerlang. kemudian benang dilumuri nasi yang dilumerkan kemudian digosok dengan kuas bulat dari ijuk. Biasanya benang yang 
                sudah diunggas sifatnya agak kenyal dan semakin terurai setelah dijemur di bawah sinar matahari terik.
              </p>
            </div>
          </div>
          <div class="row jarak">
            <h4> 5. Ani (penguntaian)</h4>
          </div>
          <div class="row g-1">
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="">
                <img src="image/proses3.jpeg" alt="" class="rounded mx-auto d-block" />
              </div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
              <p >
                <span class="tab"></span>Benang yang telah diunggas kemudian diuntai. sebelum diuntai, benang digulung berbentuk bola agar mempermudah 
                enguntaian. alat yang digunakan adalah "anian" yang terdiri atas sepotong balok kayu yang diatasnya ditancapkan tongkat pendek sesuai 
                ukuran ulos yang dikehendaki. 
              </p>
            </div>
          </div>
          <div class="row jarak">
            <h4> 6. Tonun</h4>
          </div>
          <div class="row g-1">
          <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="">
                <img src="image/proses4.jpeg" alt="" class="rounded mx-auto d-block" />
              </div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
              <p >
                <span class="tab"></span>Setelah benang diuntai, maka selanjutnya benang pun ditenun untuk membentuk sehelai ulos. Tonun (tenun) adalah proses 
                pembentukan benang yang sudah “diani” menjadi sehelai ulos. Mereka ini yang lajim disebut “partonun”.
              </p>
            </div>
          </div>
          <div class="row jarak">
            <h4> 7. Sirat</h4>
          </div>
          <div class="row g-1">
          <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="">
                <img src="image/proses5.jpeg" alt="" class="rounded mx-auto d-block" />
              </div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
              <p >
                <span class="tab"></span>Proses terakhir menjadi ulos yang memberi hiasan pengikat rambu ulos (sirat) yang biasanya dibentuk dengan motif 
                gorga. Orang yang melakukan pekerjaan ini disebut “panirat”. Sirat adalah hiasan pengikat rambu ulos. Biasanya dibentuk dengan motif gorga.
            </div>
          </div>
          
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
    <section id="footer" class="bg-dark text-light ">
      <div class="container">

          <div class="row mt-5">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <h2>Desa Suhisuhi</h2> 
            </div>
            
            <div class="col-md-6 col-sm-6 col-xs-12">
              
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 mb-5">
              <a href="" class="btn btn-secondary" style="width: 250px;">Kritik Dan Saran</a><br>
              <a class="social mt-5" href="https://web.facebook.com/groups/198857643504953" target="_blank"><i class="bi bi-facebook m-3"></i></a>
              <a class="social mt-5" href="https://www.instagram.com/explore/locations/279052206/lumban-suhi-suhi-kabsamosir/?hl=id" target="_blank"><i class="bi bi-instagram"></i></i></a>
              <a class="social mt-5" href="" target="_blank"><i class="bi bi-whatsapp m-3"></i></i></a>
            </div>
          </div>
      </div>
     
    </section>
    <!--Akhir Footer-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
