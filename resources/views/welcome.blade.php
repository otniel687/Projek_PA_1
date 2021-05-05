<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Icon" class="rounded-circle" href="css/Image/logo.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Home | Desa Suhisuhi</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

        <!--style CSS-->
    <link  type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!--Style Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
  </head>

  <body>
    <!--Navbar-->
    <nav class="navbar navbar-light bg-light">
      <div class="container m-3">
        <span class="navbar-brand mb-0" style="font-size: 40px" ><img src="css/Image/logo.png" class="rounded-circle" style="width: 50px;" alt=""> DESA SUHISUHI</span>
      </div>
    </nav>
    <!--Akhir Navbar-->

    <main>
      <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Horas ! Welcome to  <span> Website Desa Suhisuhi</span></h1>
          <h2>Beautiful Ulos From A Great Village </h2>
        </div>
      </div>
    </div>
  </section>
      <!--Akhir Jumbotron-->

      <!--Content-->
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <div class="col">
              <h2>Explore The Website</h2>
            </div>
          </div>
          <div class="row row-cols-1 row-cols-smb-4 row-cols-md-3 g-3 d-flex justify-content-center">

            <div class="col">
              <div class="card shadow-sm">
                <a href="{{ url('/desa') }} ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="175" fill="currentColor" class="bi bi-x-diamond m-3" aria-label="Placeholder: Thumbnail" viewBox="0 0 16 16" focusable="false" style="color: #cc6511;">
                    <path
                      d="M3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3zm1 5.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm8 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm1.5 6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zM12 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zM5.5 12a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zM4 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                    />
                  </svg>
                </a>
                <h3 class="text-center mb-4">Tentang Desa</h3>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <a href="{{url('/ulos')}} ">
                  <svg width="100%" height="175" fill="currentColor" class="bi bi-x-diamond m-3" aria-label="Placeholder: Thumbnail" viewBox="0 0 16 16" focusable="false" style="color: #cc6511;">
                    <path
                      d="M7.987 16a1.526 1.526 0 0 1-1.07-.448L.45 9.082a1.531 1.531 0 0 1 0-2.165L6.917.45a1.531 1.531 0 0 1 2.166 0l6.469 6.468A1.526 1.526 0 0 1 16 8.013a1.526 1.526 0 0 1-.448 1.07l-6.47 6.469A1.526 1.526 0 0 1 7.988 16zM7.639 1.17L4.766 4.044 8 7.278l3.234-3.234L8.361 1.17a.51.51 0 0 0-.722 0zM8.722 8l3.234 3.234 2.873-2.873c.2-.2.2-.523 0-.722l-2.873-2.873L8.722 8zM8 8.722l-3.234 3.234 2.873 2.873c.2.2.523.2.722 0l2.873-2.873L8 8.722zM7.278 8L4.044 4.766 1.17 7.639a.511.511 0 0 0 0 .722l2.874 2.873L7.278 8z"
                    />
                  </svg>
                </a>
                <h3 class="text-center mb-4">Ulos</h3>
              </div>
            </div>
            
            <div class="col">
              <div class="d-flex justify-content-center card shadow-sm">
                <a href="{{asset('/halamanpengrajin')}} ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="175" fill="currentColor" class="bi bi-x-diamond m-3" aria-label="Placeholder: Thumbnail" viewBox="0 0 16 16" focusable="false" style="color: #cc6511;">
                    <path
                      d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"
                    />
                  </svg>
                </a>
                <h3 class="text-center mb-4">Tentang Pengerajin</h3>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <a href="{{asset('/katalog')}} ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="175" fill="currentColor" class="bi bi-x-diamond m-3" aria-label="Placeholder: Thumbnail" viewBox="0 0 16 16" focusable="false" style="color: #cc6511;" >
                    <path
                      d="M2.522 5H2a.5.5 0 0 0-.494.574l1.372 9.149A1.5 1.5 0 0 0 4.36 16h7.278a1.5 1.5 0 0 0 1.483-1.277l1.373-9.149A.5.5 0 0 0 14 5h-.522A5.5 5.5 0 0 0 2.522 5zm1.005 0a4.5 4.5 0 0 1 8.945 0H3.527zm9.892 1l-1.286 8.574a.5.5 0 0 1-.494.426H4.36a.5.5 0 0 1-.494-.426L2.58 6h10.838z"
                    />
                  </svg>
                </a>
                <h3 class="text-center mb-4">Katalog</h3>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <a href="/login">
                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="175" fill="currentColor" class="bi bi-x-diamond m-3" aria-label="Placeholder: Thumbnail" viewBox="0 0 16 16" focusable="false" style="color: #cc6511;"">
                  <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                </svg>
                </a>
                <h3 class="text-center mb-4">Login</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Akhir Content-->

       <!--Map-->
       @yield('map')
    
    <!--Akhir Map-->

    <!--Footer-->
    @yield('footer')
    <!--Akhir Footer-->
     

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
