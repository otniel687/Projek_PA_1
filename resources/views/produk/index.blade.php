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
            <div class="col ">
              <div class="card shadow-sm ">
                <div class="wrapper">
                  <div class="gallery">
                    <div class="image">
                       <span><img src="image/produk1.jpeg" class="bd-placeholder-img img-produk"  ></span>
                    </div>
                  </div>
                </div>
                

                <div class="card-body">                  
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group"> 
                      <button type="button" class="btn btn-sm btn-outline-primary"  data-bs-toggle="modal" data-bs-target="#produk0">Click Here</button>

                      <!-- Modal -->
                      <div class="modal fade" id="produk0" tabindex="-1" aria-labelledby="produk0Label" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="produk0Label">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <h5><b> Nama Produk:</b> </h5><p> Ulos Sadum</p>
                                <h5><b>Harga pada kisaran:</b> </h5>
                                  <p><ul>
                                    <li>Rp. 500.000-1.000.000</li>
                                  </ul></p>
                                <h5><b> Lokasi: </b></h5><p>Desa Lumban Suhi Toruan, Hutaraja</p> 
                                <h5><b> Kontak yang bisa dihubungi : </b></h5>
                                <ul>
                                  <li>Rohani Silalahi :	083131923316</li>
                                  <li>Romula Situmorang : 081919931339</li>
                                </ul>
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
            <div class="col">
              <div class="card shadow-sm">
                <div class="wrapper">
                  <div class="gallery">
                    <div class="image">
                       <span><img src="image/produk2.jpeg" class="bd-placeholder-img img-produk"  ></span>
                    </div>
                  </div>
                </div>
                
                <div class="card-body">
                 
                  <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group"> 
                      <button type="button" class="btn btn-sm btn-outline-primary"  data-bs-toggle="modal" data-bs-target="#produk1">Click Here</button>

                      <!-- Modal -->
                      <div class="modal fade" id="produk1" tabindex="-1" aria-labelledby="produk1Label" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="produk1Label">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <h5><b> Nama Produk:</b> </h5><p>Ulos Ragi Hotang</p>
                                <h5><b>Harga pada kisaran:</b> </h5>
                                  <p><ul>
                                    <li>Rp. 500.000-1.500.000</li>
                                  </ul></p>
                                <h5><b> Lokasi: </b></h5><p>Desa Lumban Suhi Toruan, Hutaraja</p> 
                                <h5><b> Kontak yang bisa dihubungi : </b></h5>
                                <ul>
                                  <li>Sostiwuana Sinaga : 082370594016</li>
                                  <li>Monika Situmorang : 087893728571</li>
                                </ul>
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
            <div class="col">
              <div class="card shadow-sm">
                 <div class="wrapper">
                  <div class="gallery">
                    <div class="image">
                       <span><img src="image/produk3.jpeg" class="bd-placeholder-img img-produk"  ></span>
                    </div>
                  </div>
                </div>
                

                <div class="card-body">
                 
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group"> 
                      <button type="button" class="btn btn-sm btn-outline-primary"  data-bs-toggle="modal" data-bs-target="#produk2">Click Here</button>

                      <!-- Modal -->
                      <div class="modal fade" id="produk2" tabindex="-1" aria-labelledby="produk2Label" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="produk2Label">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <h5><b> Nama Produk:</b> </h5><p>Ulos Sibolang	</p>
                                <h5><b>Harga pada kisaran:</b> </h5>
                                  <p><ul>
                                    <li>Rp. 5-20.000.000 </li>
                                  </ul></p>
                                <h5><b> Lokasi: </b></h5><p>Desa Lumban Suhi Toruan, Hutaraja</p> 
                                <h5><b> Kontak yang bisa dihubungi : </b></h5>
                                <ul>
                                  <li>Sonta Situmorang : 082167411136</li>
                                  <li>Rohani Silalahi	: 083131923316</li>
                                </ul>
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

            <div class="col">
              <div class="card shadow-sm">
               <div class="wrapper">
                  <div class="gallery">
                    <div class="image">
                       <span><img src="image/produk4.jpeg" class="bd-placeholder-img img-produk"  ></span>
                    </div>
                  </div>
                </div>
                

                <div class="card-body">
                 
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group"> 
                      <button type="button" class="btn btn-sm btn-outline-primary"  data-bs-toggle="modal" data-bs-target="#produk3">Click Here</button>

                      <!-- Modal -->
                      <div class="modal fade" id="produk3" tabindex="-1" aria-labelledby="produk3Label" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="produk3Label">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <h5><b> Nama Produk:</b> </h5><p> Ulos Bintang Maratur</p>
                                <h5><b>Harga pada kisaran:</b> </h5>
                                  <p><ul>
                                    <li>Rp 300.000-5.000.000</li>
                                  </ul></p>
                                <h5><b> Lokasi: </b></h5><p>Desa Lumban Suhi Toruan, Hutaraja</p> 
                                <h5><b> Kontak yang bisa dihubungi : </b></h5>
                                <ul>
                                  <li>Sostiwuana Sinaga : 082370594016</li>
                                  <li>Romula Situmorang : 081919931339</li>
                                </ul> 
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
            <div class="col">
              <div class="card shadow-sm">
                <div class="wrapper">
                  <div class="gallery">
                    <div class="image">
                       <span><img src="image/produk5.jpeg" class="bd-placeholder-img img-produk"  ></span>
                    </div>
                  </div>
                </div>
                

                <div class="card-body">
                 
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group"> 
                      <button type="button" class="btn btn-sm btn-outline-primary"  data-bs-toggle="modal" data-bs-target="#produk4">Click Here</button>

                      <!-- Modal -->
                      <div class="modal fade" id="produk4" tabindex="-1" aria-labelledby="produk4Label" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="produk4Label">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <h5><b> Nama Produk:</b> </h5><p> Ulos Mangiring </p>
                                <h5><b>Harga pada kisaran:</b> </h5>
                                  <p><ul>
                                    <li>Rp 500.000-5.000.000</li>
                                  </ul></p>
                                <h5><b> Lokasi: </b></h5><p>Desa Lumban Suhi Toruan, Hutaraja</p> 
                                <h5><b> Kontak yang bisa dihubungi : </b></h5>
                                <ul>
                                  <li>Monika Situmorang : 087893728571</li>
                                  <li>Desnita Novita Sari Simarmata : 083131923316</li>
                                </ul>
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
            <div class="col">
              <div class="card shadow-sm">
                <div class="wrapper">
                  <div class="gallery">
                    <div class="image">
                       <span><img src="image/produk6.jpeg" class="bd-placeholder-img img-produk"  ></span>
                    </div>
                  </div>
                </div>
                

                <div class="card-body">
                 
                  <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group"> 
                      <button type="button" class="btn btn-sm btn-outline-primary"  data-bs-toggle="modal" data-bs-target="#produk5">Click Here</button>

                      <!-- Modal -->
                      <div class="modal fade" id="produk5" tabindex="-1" aria-labelledby="produk5Label" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="produk5Label">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <h5><b> Nama Produk:</b> </h5><p>Ulos Sibolang </p>
                                <h5><b>Harga pada kisaran:</b> </h5>
                                  <p><ul>
                                    <li>Rp. 5-20.000.000</li>
                                  </ul></p>
                                <h5><b> Lokasi: </b></h5><p>Desa Lumban Suhi Toruan, Hutaraja</p> 
                                <h5><b> Kontak yang bisa dihubungi : </b></h5>
                                <ul>
                                  <li>Sonta Situmorang : 082167411136</li>
                                  <li>Rohani Silalahi	: 083131923316</li>
                                </ul>
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

            <div class="col">
              <div class="card shadow-sm">
                <div class="wrapper">
                  <div class="gallery">
                    <div class="image">
                       <span><img src="image/produk7.jpeg" class="bd-placeholder-img img-produk"  ></span>
                    </div>
                  </div>
                </div>
                

                <div class="card-body">
                 
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group"> 
                      <button type="button" class="btn btn-sm btn-outline-primary"  data-bs-toggle="modal" data-bs-target="#produk6">Click Here</button>

                      <!-- Modal -->
                      <div class="modal fade" id="produk6" tabindex="-1" aria-labelledby="produk6Label" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="produk6Label">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <h5><b> Nama Produk:</b> </h5><p> Uis Nipes </p>
                                <h5><b>Harga pada kisaran:</b> </h5>
                                  <p><ul>
                                    <li>Rp. 500.000 </li>
                                  </ul></p>
                                <h5><b> Lokasi: </b></h5><p>Desa Lumban Suhi Toruan, Hutaraja</p> 
                                <h5><b> Kontak yang bisa dihubungi : </b></h5>
                                  <ul>
                                    <li>Efriana Ayu Lestari Simarmata : 087869159927</li>
                                    <li>Desnita Novita Sari Simarmata : 083131923316</li>
                                  </ul>
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
            <div class="col">
              <div class="card shadow-sm">
                <div class="wrapper">
                  <div class="gallery">
                    <div class="image">
                       <span><img src="image/produk8.jpeg" class="bd-placeholder-img img-produk"  ></span>
                    </div>
                  </div>
                </div>
                

                <div class="card-body">
                 
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group"> 
                      <button type="button" class="btn btn-sm btn-outline-primary"  data-bs-toggle="modal" data-bs-target="#produk7">Click Here</button>

                      <!-- Modal -->
                      <div class="modal fade" id="produk7" tabindex="-1" aria-labelledby="produk7Label" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="produk7Label">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <h5><b> Nama Produk:</b> </h5><p> Uis Julu Diberu</p>
                                <h5><b>Harga pada kisaran:</b> </h5>
                                  <p><ul>
                                    <li>Rp. 550.000</li>
                                  </ul></p>
                                <h5><b> Lokasi: </b></h5><p>Desa Lumban Suhi Toruan, Hutaraja</p> 
                                <h5><b> Kontak yang bisa dihubungi : </b></h5>
                                  <ul>
                                    <li>Rohani Silalahi	: 083131923316</li>
                                    <li>Efriana Ayu Lestari Simarmata : 087869159927</li>
                                  </ul>
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
            <div class="col">
              <div class="card shadow-sm">
                <div class="wrapper">
                  <div class="gallery">
                    <div class="image">
                       <span><img src="image/produk9.jpeg" class="bd-placeholder-img img-produk"  ></span>
                    </div>
                  </div>
                </div>
                

                <div class="card-body">
                 
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group"> 
                      <button type="button" class="btn btn-sm btn-outline-primary"  data-bs-toggle="modal" data-bs-target="#produk8">Click Here</button>

                      <!-- Modal -->
                      <div class="modal fade" id="produk8" tabindex="-1" aria-labelledby="produk8Label" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="produk8Label">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <h5><b> Nama Produk:</b> </h5><p>Beka Buluh Karo</p>
                                <h5><b>Harga pada kisaran:</b> </h5>
                                  <p><ul>
                                    <li>Rp.500.000</li>
                                  </ul></p>
                                <h5><b> Lokasi: </b></h5><p>Desa Lumban Suhi Toruan, Hutaraja</p> 
                                <h5><b> Kontak yang bisa dihubungi : </b></h5>
                                  <ul>
                                    <li>Efriana Ayu Lestari Simarmata : 087869159927</li>
                                    <li>Desnita Novita Sari Simarmata : 083131923316</li>
                                  </ul>
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

            <div class="col ">
              <div class="card shadow-sm">
                <div class="wrapper">
                  <div class="gallery">
                    <div class="image">
                       <span><img src="image/produk10.jpeg" class="bd-placeholder-img img-produk"  ></span>
                    </div>
                  </div>
                </div>
                
                
                <div class="card-body">
                 
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group"> 
                      <button type="button" class="btn btn-sm btn-outline-primary"  data-bs-toggle="modal" data-bs-target="#produk9">Click Here</button>

                      <!-- Modal -->
                      <div class="modal fade" id="produk9" tabindex="-1" aria-labelledby="produk9Label" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="produk9Label">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <h5><b> Nama Produk:</b> </h5><p> Ulos Ragi Hotang</p>
                                <h5><b>Harga pada kisaran:</b> </h5>
                                  <p><ul>
                                    <li>Rp 500.000-1.500.000</li>
                                  </ul></p>
                                <h5><b> Lokasi: </b></h5><p>Desa Lumban Suhi Toruan, Hutaraja</p> 
                                <h5><b> Kontak yang bisa dihubungi : </b></h5>
                                <ul>
                                  <li>Sostiwuana Sinaga : 082370594016</li>
                                  <li>Monika Situmorang : 087893728571</li>
                                </ul>
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
            
          </div>
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

   