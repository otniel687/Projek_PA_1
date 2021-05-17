@extends('layouts.defaulttwo')

@section('title', 'Pengrajin')

<!--Header-->
    @section('header')
    <style>
     .s{
       color: yellow;
       font-weight: bold;
     }
    </style>
    <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}" >
    <section id="pengrajin" class="d-flex align-items-center">
      <div class="container p-4 p-md-5 mb-4 mt-5 text-white rounded" style="color: #fff;  background-size: cover;">
        <div class="col-md-8 px-0">
          <h1 class="display-4 fst-italic">Pembuat Yang Handal Dengan Hasil Yang Spesial.</h1>
          <p class="lead ">
            Pembuatan ulos tidak di buat dengan asal asalan, perlu skill yang cukup bagus dan memiliki ketelitian dalam pembuatannya. Maka perlunya pengerajin yang handal
            untuk membuat dalam pembuatan ulos. Beberapa pengerajin yang ada di Desa Suhisuhi dapat membantu anda memilih produk yang tepat untuk anda.
          </p><br>
          <br>
          <div class="s">
          <b>Khusus Pengrajin,<br>
          Jika ingin bergabung dengan kami, hanya mengisi data yang ada pada tombol dibawah ini.</b><br>
          <a class="navbar-brand" href="/join">          
          <button class="btn-danger mt-3" href="/join"><i class="fas fa-hand-point-right"></i> Bergabunglah dengan kami</button></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          </div>

        </div>
      </div>
    </section>
    @endsection
<!--Akhir Header-->

<!--Pengerajin -->
@section('content')
  <style>
    h1,p {
      font-family: 'New Tegomin', serif;
    }
  </style>
      <section id="galery" class="galery">
        <div class="container">
          <center>
          <div class = "row">
            @foreach($data as $pr)
              <div class ="col-md-4" style="margin-bottom: 10px;">
                  <div class="card" style="width: 16rem;">
                    <img src="{{ url('image') }}/{{ $pr->foto }}"  class="bd-placeholder-img " width="210" height="210">
                    <div class="card-body">
                    <center><h5 class="card-title">{{$pr->nama}}</h5></center>
                        <!-- Button trigger modal -->
                        <center><button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$pr->id}}">Profil</button></center>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$pr->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tentang Pengrajin</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">

                              <table class="table table-hover" cellpadding="10">
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{$pr->nama}}</td>
                                </tr>
                                <tr>
                                    <td>Contact Person</td>
                                    <td>:</td>
                                    <td>{{$pr->kontak}}</td>
                                </tr>
                                <tr>
                                    <td>Lokasi</td>
                                    <td>:</td>
                                    <td>{{$pr->alamat}}</td>
                                </tr>
                                <tr>
                                    <td>Ulos yang dapat di buat </td>
                                    <td>:</td>
                                    <td>{{$pr->kerajinan}}</td>
                                </tr>
                        </table>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div> 
              </div>
            @endforeach

          </div>
        </div>
      </section>
@endsection


        