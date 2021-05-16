@extends('layouts.defaulttwo')

@section('title', 'Katalog')

    <!--Carousel-->
    @section('header')
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
                  <img src="image/katalog1.jpg" alt="" />
                </div>

                <div class="carousel-item">
                  <img src="image/katalog2.jpg" alt="" />
                </div>

                <div class="carousel-item">
                  <img src="image/katalog3.jpg" alt="" />
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
    @endsection
    <!--Akhir Carousel-->

    <!--Katalog-->
    @section('content')
        <section>
        <div >
            <div class="row">
                <div class="col">
                    <h1 class="text-center">Produk</h1>
                </div>
            </div>
            <div class="album py-5 bg-light">
        <div class="container-fluid">
          <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 d-flex justify-content-center g-3 ">
          @foreach($produk as $produk)
            <div class="col ">
              <div class="card shadow-sm ">
                <div class="wrapper">
                  <div class="gallery">
                    <div class="image">
                       <span><img src="{{ url('image') }}/{{ $produk->gambar }}"class="bd-placeholder-img img-produk"  ></span>
                    </div>
                  </div>
                </div>
                

                <div class="card-body">                  
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group"> 
                      <button type="button" class="btn btn-sm btn-outline-primary"  data-bs-toggle="modal" data-bs-target="#produk0{{ $produk->id }}">More</button>

                      <!-- Modal -->
                      <div class="modal fade" id="produk0{{ $produk->id }}" tabindex="-1" aria-labelledby="produk0Label" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="produk0Label"></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body row">
                              <div class="col-md-5 img-dtl">
                                <img width="100%" src="{{asset('image')}}/{{ $produk->gambar }}" alt="not found">
                                </div>
                                <div class="col-md-7">
                                  <p><ul>
                                  <h5><b> <li>{{ $produk->nama }}</li></b> </h5>
                                  <hr size="6" />
                                  </ul></p>
                                  <p><ul>
                                    <li>{{ $produk->kontak1 }}</li>
                                    <li>{{ $produk->kontak2 }}</li>
                                  </ul></p>
                                  
                                  <p><ul>
                                  <hr />
                                    <li>{{ $produk-> harga }}</li>
                                  </ul></p>
                                  </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            @endforeach

            </div>
            <div class="preview-box">
          <div class="details">
            <span class="title">
                Image
                <p class="current-img"></p>
                of
                <p class="total-img"></p>
              </span>
              <span class="icon fas fa-times"></span>
            </div>
            <div class="image-box">
              <div class="slide prev"><i class="fas fa-angle-left"></i></div>
              <div class="slide next"><i class="fas fa-angle-right"></i></div>
              <img src="" alt="" />
            </div>
          </div>
        <div class="shadow"></div>
      </div>
        </div>
            </section>
    @endsection
    <!--Akhir Katalog-->
