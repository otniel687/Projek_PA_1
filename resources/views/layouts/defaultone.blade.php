@extends('welcome')
@section('map')
    <section id="map" class="map">
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
      <div class="container">

          <div class="row mt-5 ">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <h2>Desa Suhisuhi</h2>
              <p>
              <span class="tab"></span> Website ini  bertujuan untuk Mempromosikan Desa dan Pariwisata Desa Lumban Gaol. <br><br>
              </p> 
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
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
@endsection
