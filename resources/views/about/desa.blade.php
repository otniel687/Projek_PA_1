<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="Icon" class="rounded-circle" href="{{asset('css/Image/logo.png')}} ">
    <title> Tentang Desa| Desa Suhisuhi</title>
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
                <a class="nav-link" href="{{url('/halamanpengrajin')}} ">Tentang Pengrajin</a>
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

    <!--Carousel-->
    <article class="" id="carousel">
      <div>
        <div class="bd-example">
          <center>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="image/image1.jpg" alt="" />

                </div>
                <div class="carousel-item">
                  <img src="image/image2.jpg" alt="" />
  
                </div>
                <div class="carousel-item">
                  <img src="image/image3.jpg" alt="" />
  
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </a>
            </div>
          </center>
        </div>
      </div>
    </article>
    <!--Akhir Carousel-->

    <!--Content-->
    <section id="content">
      <div class="container-fluid">
        <div class="row">
          @foreach ($desa as $tentang) 
          <div class="col-md-6 col-lg-3 " data-aos="flip-right">
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="mt-2 mb-2 fw-normal text-center">{{$tentang->nama}} </h4>
              </div>
              <div class="card figure">
                <img class="img-fluib" src="{{ url('image') }}/{{ $tentang->gambar}}" />
              </div>
              <div class="card-body content ">
                <div class="read-more">
                  {{$tentang->informasi}}
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!--Akhir Content-->

    <!--Galery-->
    <section id="galery">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h3>Galery Desa Suhisuhi</h3>
          </div>
        </div>
        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 d-flex justify-content-center m-3">
          @foreach ($galery as $foto)
          <div class="col mb-3">
            <div class="card item">
              <a href="{{ url('image') }}/{{ $foto->gambar}}" class="fancybox" data-fancybox="gallery1">
                <img src="{{ url('image') }}/{{ $foto->gambar}}" class="card-img-top rounded mx-auto d-block" >
              </a>
            </div>
          </div>
          @endforeach
          </div>
        </div>
      </div>
    </section>
    <!--Akhir Galery-->

    <!--Video -->
    <section id="video">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col">
            <h2 class="text-center">Video</h2>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 m-auto mt-3">
          <div class="col">
            <video controls class="rounded mx-auto d-block">
              <source src="{{ url('video') }}/{{ $video->video}}" type="video/mp4" />
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
          <a class="social mt-5" href="https://api.whatsapp.com/send?phone=6282273896001" target="_blank"><i class="bi bi-whatsapp m-3"></i></a>
          <a class="social mt-5" href="https://www.youtube.com/watch?v=VLNjo2LQ2XY" target="_blank"><i class="bi bi-youtube"></i></a>
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

    <script src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
          
      $(document).ready(function () {
        var readMoreHTML = $(".read-more").html();
        var lessText = readMoreHTML.substr(0, 100);

        if (readMoreHTML.length > 100) {
          $(".read-more").html(lessText).append("<a href='' class='read-more-link'> Show More</a>");
        } else {
          $("read-more").html(readMoreHTML);
        }

        $("body").on("click", ".read-more-link", function (event) {
          event.preventDefault();
          $(this).parent(".read-more").html(readMoreHTML).append("<a href='' class='show-less-link'> Show Less</a>");
        });

        $("body").on("click", ".show-less-link", function () {
          event.preventDefault();
          $(this).parent(".read-more").html(readMoreHTML.substr(0, 100)).append("<a href='' class='read-more-link'> Show More</a>");
        });
      });
      $(document).ready(function () {
        var readMoriHTML = $(".read-mori").html();
        var lessText = readMoriHTML.substr(0, 100);

        if (readMoriHTML.length > 100) {
          $(".read-mori").html(lessText).append("<a href='' class='read-mori-link'> Show More</a>");
        } else {
          $("read-mori").html(readMoriHTML);
        }

        $("body").on("click", ".read-mori-link", function (event) {
          event.preventDefault();
          $(this).parent(".read-mori").html(readMoriHTML).append("<a href='' class='show-less-link'> Show Less</a>");
        });

        $("body").on("click", ".show-less-link", function () {
          event.preventDefault();
          $(this).parent(".read-mori").html(readMoriHTML.substr(0, 100)).append("<a href='' class='read-mori-link'> Show More</a>");
        });
      });
      $(document).ready(function () {
        var readMoroHTML = $(".read-moro").html();
        var lessText = readMoroHTML.substr(0, 100);

        if (readMoroHTML.length > 100) {
          $(".read-moro").html(lessText).append("<a href='' class='read-moro-link'> Show More</a>");
        } else {
          $("read-moro").html(readMoroHTML);
        }

        $("body").on("click", ".read-moro-link", function (event) {
          event.preventDefault();
          $(this).parent(".read-moro").html(readMoroHTML).append("<a href='' class='show-less-link'> Show Less</a>");
        });

        $("body").on("click", ".show-less-link", function () {
          event.preventDefault();
          $(this).parent(".read-moro").html(readMoroHTML.substr(0, 100)).append("<a href='' class='read-moro-link'> Show More</a>");
        });
      });
      $(document).ready(function () {
        var readMoruHTML = $(".read-moru").html();
        var lessText = readMoruHTML.substr(0, 100);

        if (readMoruHTML.length > 100) {
          $(".read-moru").html(lessText).append("<a href='' class='read-moru-link'> Show More</a>");
        } else {
          $("read-moru").html(readMoruHTML);
        }

        $("body").on("click", ".read-moru-link", function (event) {
          event.preventDefault();
          $(this).parent(".read-moru").html(readMoruHTML).append("<a href='' class='show-less-link'> Show Less</a>");
        });

        $("body").on("click", ".show-less-link", function () {
          event.preventDefault();
          $(this).parent(".read-moru").html(readMoruHTML.substr(0, 100)).append("<a href='' class='read-moru-link'> Show More</a>");
        });
      });
      
     </script>


    <script src="js/bootstrap.bundle.min.js"></script>
    
    
    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  </body>
</html>
