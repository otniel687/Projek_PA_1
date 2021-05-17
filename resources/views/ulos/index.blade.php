@extends('layouts.defaultthree')
@section('title','Ulos')
@section('header')

    <!--Header-->
    <section id="header-ulos" class=" d-flex align-items-center">
      <div class="container p-4 p-md-5 mb-4 text-white rounded" style="color: #fff;  background-size: cover;">
        <div class="col-md-6 px-0">
          <h1 class="display-4 fst-italic">{{ $header->nama }}</h1>
          <p class="lead my-3">{{ $header->informasi }} </p>
        </div>
      </div>
    </section>
    <!--Akhir Header-->
@endsection

@section('content')
    
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
                <img class="img-fluib" src="gambar/{{ $ragi_hidup->gambar }}" alt="" />
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 shadow-sm">
              <div class="card figure">
                <img class="img-fluib" src="gambar/{{ $mangiring->gambar }}" alt="" />
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 shadow-sm">
              <div class="card figure">
                <img class="img-fluib" src="gambar/{{ $ragi_hotang->gambar }}" alt="" />
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
                <img class="img-fluib" src="Image/{{ $ariteneng->gambar }}" alt="" />
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 shadow-sm">
             
              <div class="card figure">
                <img class="img-fluib" src="Image/{{ $gatip->gambar }}" alt="" />
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 shadow-sm">
             
              <div class="card figure">
                <img class="img-fluib" src="image/{{ $beka_buluh->gambar }}" alt="" />
              </div>
            </div>
          </div>
          
        </div>
        </div>
    </section>
    <!--Akhir Content-->
@endsection

@section('penjelasan')
    <!--Proses-->
    <section id="prosesb" class="gambarb">
      <div class="container">
        <div class="row">
          <div class="col">
            <h3 class="text-center">{{ $penjelasan->nama}}</h3>
          </div>
          <div class="row">
            <div class="col">
              <p>
                <span class="tab"></span>{{ $penjelasan->informasi}}
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
@endsection

@section('video')
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
              <source src="{{ url('video') }}/{{ $video->video}}" type="video/mp4" />
            </video>
          </div>
          </div>
      </div>
    </section>
    <!--Akhir Video-->
@endsection
   
