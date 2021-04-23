@extends('layouts.defaulttwo')

@section('title', 'Ulos Batak Karo')
    
    <!--Header-->
    @section('header')
        <section id="bg-karo" class="d-flex align-items-center">
      <div class="container position-relative text-center text-lg-start " data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
        <div class="col-md-6 px-0">
          <h1 class="display-4 fst-italic">Some important things about Ulos Batak Karo.</h1> 
        </div>
        </div>
      </div>
    </section>
    @endsection
   
    <!--Akhir Header-->

    <!--Content Ulos BATAK-->
    @section('content')
    <section id="ulos_batak" class="gambarb">
      <div class="container">
        <div class="row">
          <div class="col">
            <h3 class="text-center">Ulos Batak Karo</h3>
          </div>

          <div class="row ">
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="">
                <img src="{{asset('image/ulos_karo.jpg')}}" alt="" class="rounded mx-auto d-block" style="height: 210px;"/>
              </div>
            </div>

            <div class="col-md-8 ">
              <p >
                <span class="tab"></span>Dalam budaya masyarakat Karo, sejak tahun 1960-an, kegiatan menenun ulos (uis), sudah tidak begitu berdensitas padat lagi, seperti masa-masa sebelumnya. Menurut penjelasan para informan, karena umumnya masyarakat Karo sangat menggantungkan dan mengutamakan kegiatan bertani (terutama sayur mayur dan buah-buahan), yang dianggap lebih menjanjikan secara ekonomis. Untuk memiliki uis mereka dapat membelinya di daerah Batak Toba dengan harga yang relatif terjangkau. Namun demikian di antara masyarakat Karo ini, ada juga yang tergerak hati dan minatnya untuk meneruskan tradisi tenunan uis. Salah satu di antaranya adalah Bapak Saha tambun, S.Teks., sarjana tekstil lulusan Institut Teknologi Tekstil Bandung tahun 1989, yang membuka usahanya di Kota Kabanjahe.
              </p>
            </div>
          </div>
           <div class="row">
          <div class="col">
            <p><span class="tab"></span>
            Kain adat tradisional Karo (uis adat Karo) merupakan pakaian adat yang digunakan dalam kegiatan budaya suku karo maupun dalam kehidupan sehari-hari. Uis Karo memiliki warna dan motif yang berhubungan dengan penggunaannya atau dengan pelaksanaan kegiatan budaya. Pada umumnya uis adat Karo dibuat dari bahan kapas, dipintal dan ditenun secara manual dan menggunakan zat pewarna alami (tidak menggunakan bahan kimia pabrik). Namun ada juga beberapa diantaranya menggunakan bahan kain pabrikan yang dicelup (diwarnai) dengan pewarna alami dan dijadikan kain adat Karo.Beberapa di antara uis adat Karo tersebut sudah langka karena tidak lagi digunakan dalam kehidupan sehari-hari, atau hanya digunakan dalam kegiatan ritual budaya yang berhubungan dengan kepercayaan animisme dan saat ini tidak dilakukan lagi.
            </p>
          </div>
        </div>
        </div>
      </div>
    </section> 
    @endsection
    <!--Akhir content Ulos BATAK-->

    <!--Content-->
    @section('jenis')
        <section id="j_ulos">
      <div class="container">
        <div class="row">
          <div class="col">
            <h3 class="text-center">Jenis Jenis Ulos</h3>
          </div>
        </div>
        <div class="row row-cols-2 row-cols-md-3 text-center d-flex justify-content-center m-3">
          <div class="col">
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="mt-2 mb-2 fw-normal">Beka Buluh</h4>
              </div>
              <div class="card figure">
                <img class="img-fluib" src="{{asset('Image/beka_buluh.jpg')}} " alt="" />
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="mt-2 mb-2 fw-normal">Uis Parembah</h4>
              </div>
              <div class="card figure">
                <img class="img-fluib" src="{{asset('Image/parembah.jpeg')}} " alt="" />
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="mt-2 mb-2 fw-normal">Arinteneng</h4>
              </div>
              <div class="card figure">
                <img class="img-fluib" src="{{asset('image/arinteneng.jpeg')}} " alt="" />
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="mt-2 mb-2 fw-normal">Julu berjongkit</h4>
              </div>
              <div class="card figure">
                <img class="img-fluib" src="{{asset('image/julu_berjongkit.jpeg')}}  " alt="" />
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="mt-2 mb-2 fw-normal">Gatip</h4>
              </div>
              <div class="card figure">
                <img class="img-fluib" src="{{asset('image/gatip.jpeg')}}" alt="" />
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="mt-2 mb-2 fw-normal">Pementing</h4>
              </div>
              <div class="card figure">
                <img class="img-fluib" src="{{asset('image/pementing.jpeg')}}" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection
    <!--Akhir Content-->

    <!--Video -->
    @section('video')
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
              <source src="{{asset('video/ulos_karo.mp4')}}  " type="video/mp4" />
            </video>
          </div>
          </div>
      </div>
    </section>
    @endsection
    
    <!--Akhir Video-->

     