@extends('layouts.defaulttwo')

@section('title', 'Ulos Batak Toba')

    <!--Header-->
@section('header')
    <section id="bg-batak" class="d-flex align-items-center">
      <div class="container position-relative text-center text-lg-start " data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
        <div class="col-md-6 px-0">
          <h1 class="display-4 fst-italic">Some important things about Ulos Batak Toba.</h1> 
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
            <h3 class="text-center">Ulos Batak Toba</h3>
          </div>

          <div class="row ">
            <div class="col-md-4 col-sm-12  col-xs-12">
              <div class="">
                <img src="{{asset('image/ulos_batak.jpg')}}" alt="" class="rounded mx-auto d-block" />
              </div>
            </div>

            <div class="col-md-8 col-sm-12 col-xs-12 ">
              <p class="mx-auto">
                <span class="tab"></span>Kain ulos adalah kain tenun tangan khas dari suku Batak Toba yang sering juga dijadikan oleh-oleh khas dari Toba.
                  Ulos  sering digunakan baik dalam kehidupan sehari-hari. 
                  Ulos juga dipakai dalam ritus atau upacara adat Batak, baik dalam suka maupun duka.
                  Ulos juga tidak bisa sembarangan dipakai karena beda jenis, maka beda pula maknanya. 
                  Pemberian ulos kepada orang Non-Batak ini biasanya dapat berarti sebagai sebuah simbol kasih sayang atau penghormatan. Sama seperti dengan kain di seluruh Indonesia, pembuatan kain ulos tidak mudah.
                  Membutuhkan waktu berhari-hari atau bahkan berbulan-bulan untuk menyelesaikan satu kain.
                  masyarakat dari luar suku Batak mengenal kain yang berasal dari kawasan Toba hanya ada satu jenis ulos.
                  Namun, sebenarnya ulos terdiri dari berbagai jenis. 
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
        <div class="row row-cols-2 row-cols-md-3 text-md-center d-flex justify-content-center m-4">

        @foreach( $data_web2 as $uls)          
          <div class="col">
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="mt-2 mb-2 fw-normal">{{ $uls->nama }}</h4>
              </div>
              <div class="card figure">
                <img class="img-fluib" src="{{asset('gambar/'.$uls->gambar)}}
                " alt="">
              </div>
            </div>
          </div>
          @endforeach
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
        <div class="row row-cols-1 row-cols-md-2 m-auto mt-3">
          <div class="col">
            <video controls class="rounded mx-auto d-block">
              <source src="{{asset('video/ulos_batak.mp4')}}" type="video/mp4" />
            </video>
          </div>
        </div>
      </div>
    </section>
    @endsection
    <!--Akhir Video-->
