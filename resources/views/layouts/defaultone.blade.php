@extends('welcome')
@section('map')
    <section id="map" class="map" style="background-color: #bfbfbf;">
      <div class="container">
        <div class="row">
          <div class="col">
            <h2 >Peta Desa</h2>
          </div>
        </div>
      </div>
        <div id="map1" class="row mt-3">
          <div class="col">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2942.982948299537!2d98.69525011206085!3d2.6501723650326356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031c56ea9402a2b%3A0x14c6e0940d6f41b2!2sKampung%20Inggris%20Hutaraja%20Unika!5e0!3m2!1sid!2sid!4v1616225985467!5m2!1sid!2sid"
              width="100%"
              height="350"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
        
      </div>
    </section>
@endsection
@section('footer')
    <section id="footer" class="bg-dark text-light">
      <div>
        <br> <br>
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-4" style="font-family: 'Righteous', cursive; color: cornflowerblue; size:'7';">
              <font size='7'><p>UMKM website of Lumban Suhi-Suhi Village - since 2021!</p></font>
            </div>
            <link rel="preconnect" href="https://fonts.gstatic.com"><link href="https://fonts.googleapis.com/css2?family=Caveat&family=Righteous&display=swap" rel="stylesheet">
            <div class="col-md-3" style="font-family: 'Caveat', cursive;font-family: 'Righteous', cursive;">
              <h4 style="color:darkcyan">A little bit about this site</h4>
              <p>Hello,<br>We are from group 01, Project End 1 (PA 1) ; The Development Team manages UMKM Websites. This website is used to promote and publish about Ulos UMKM from this village. For you, this may be a source of inspiration for a new project or something else that helps you. <br>Enjoy!</p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
              <a href="/kritik" class="btn btn-warning" style="width: 250px;">Kritik Dan Saran</a><br>
              <br>
              <a class="social mt-5" href="https://web.facebook.com/search/top?q=desa%20lumban%20suhi-suhi" target="_blank"><i class="bi bi-facebook m-3"></i></a>
              <a class="social mt-5" href="https://www.instagram.com/explore/locations/279052206/lumban-suhi-suhi-kabsamosir/?hl=id" target="_blank"><i class="bi bi-instagram"></i></i></a>
              <a class="social mt-5" href="https://api.whatsapp.com/send?phone=6282273896001" target="_blank"><i class="bi bi-whatsapp m-3"></i></a>
              <a class="social mt-5" href="https://web.telegram.org/" target="_blank"><i class="bi bi-telegram"></i></a>
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
    </section>
@endsection
