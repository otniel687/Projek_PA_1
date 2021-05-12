@extends('layouts.defaulttwo')
@section('title', 'Pengerajin')

<!--Header-->
    @section('header')
    <section id="pengrajin" class="d-flex align-items-center">
      <div class="container p-4 p-md-5 mb-4 text-white rounded" style="color: #fff;  background-size: cover;">
        <div class="col-md-6 px-0">
          <h1 class="display-4 fst-italic">Pembuat Yang Handal Dengan Hasil Yang Spesial.</h1>
          <p class="lead my-3">
            Pembuatan ulos tidak di buat dengan asal asalan, perlu skill yang cukup bagus dan memiliki ketelitian dalam pembuatannya. Maka perlunya pengerajin yang handal
            untuk membuat dalam pembuatan ulos. Beberapa pengerajin yang ada di Desa Suhisuhi dapat membantu anda memilih produk yang tepat untuk anda.
          </p>
        </div>
      </div>
    </section>
    @endsection
<!--Akhir Header-->

<!--Pengerajin -->
@section('content')
    <section id="galery" class="galery">
  <div class="row">
    <div class="col">
      <h3 class="text-center">Tentang Pengerajin</h3>
    </div>
  </div>

        <div class="container marketing">
                <!-- Three columns of text below the carousel -->
          <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2 d-flex justify-content-center text-center">
              @foreach ($data as $pengrajin)
            <!--Pengerajin 1-->
            <div class="col bulat mt-3">
                  <a href="{{ url('foto') }}/{{ $pengrajin->foto }}" class="fancybox" data-fancybox="gallery1">
                    <img src="{{ url('foto') }}/{{ $pengrajin->foto }}" class="bd-placeholder-img rounded-circle" width="180" height="180">
                  </a>

                <h2>{{ $pengrajin->nama}}</h2>
                <div class="btn-group"></div>
                  <!--Modal-->
                  <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#view1">Profile</button>
                    <!--Isi Modal-->
                    <div class="modal fade" id="view1"  tabindex="-1" aria-labelledby="view1Label" aria-hidden="true">
                      <div class="modal-dialog ">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="view1Label">Tentang Pengerajin</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body text-start">
                            <h5><b> Nama:</b> </h5><p> {{$pengrajin->nama}}</p>
                            <h5><b> Contact Person : </b></h5> 
                              <p><ul>
                                <li>{{$pengrajin->kontak}}</li>
                            </ul></p>
                            <h5><b> Lokasi: </b></h5><p> {{$pengrajin->alamat}} </p>
                            <h5><b>Ulos yang dapat di buat:</b> </h5>
                              <p>{{ $pengrajin->kerajinan}}</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                  </div>
        </div>
        @endforeach
@endsection