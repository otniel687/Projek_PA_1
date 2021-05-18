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
          Jika ingin bergabung, hanya mengisi data yang ada pada tombol dibawah ini.</b><br>
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
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
body {
  font-family: 'Open Sans', sans-serif;
  background-size: cover;
}
    .card {
      margin: 0 auto;
      padding: 20px;
      border-radius: 20px;
      box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
    }
input:focus {
  border-width: 0 0 4px;
}
.btn {
  background-color: #1685e6;
  color: white;
  font-weight: bold;
  width: 8rem;
  border-radius: 20px;
  letter-spacing: 3px;
}
.btn:hover {
  background-color: rgb(11, 248, 213);
  color: rgb(223, 39, 214);
}
    
  </style>
      <section id="galery" class="galery">
        <div class="container-fluid">
          <center>
          <div class = "row d-flex justify-content-center mb-5">
            @foreach($data as $pr)
              <div class ="col-md-3" style="margin-bottom: 10px;">
                  <div class="card" style="width: 16rem;">
                    <img src="{{asset('foto')}}/{{ $pr->foto }}"  class="bd-placeholder-img " width="210" height="210">
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
              <br><br>
            @endforeach

          </div>
        </div>
      </section>
@endsection


        