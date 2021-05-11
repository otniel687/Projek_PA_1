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
          </p><br>
          <a class="navbar-brand" href="/join">          
          <button class="btn-danger mt-3" href="/join"><i class="fas fa-hand-point-right"></i> Join Us (<span>specialty craftsmen</span>)</button></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
       
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
  </div>
        <div class="container marketing">
          <!-- Three columns of text below the carousel -->
    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2 d-flex justify-content-center text-center">
      <!--Pengerajin 1-->
       <div class="col bulat mt-3">
          <a href="image/pengrajin1.jpeg" class="fancybox" data-fancybox="gallery1">
            <img src="image/pengrajin1.jpeg" class="bd-placeholder-img rounded-circle" width="180" height="180">
        </a>

        <h2>Rohani Silalahi</h2>
        <p>Pengrajin ini dapat menenun segala jenis Ulos Batak Toba dan Batak karo. Hasil ulos yang ditenun berasal dari pewarna alami dan sintesis.</p>
        <div class="btn-group"></div>
         <!--Modal-->
        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#view1">Profile</button>
        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#edit1">Karya</button>

          <!--Isi Modal-->
          <div class="modal fade" id="view1"  tabindex="-1" aria-labelledby="view1Label" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="view1Label">Tentang Pengerajin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                  <h5><b> Nama:</b> </h5><p> Rohani Silalahi</p>
                  <h5><b> Contact Person : </b></h5> 
                    <p><ul>
                      <li>* 083131923316</li>
                  </ul></p>
                  <h5><b> Lokasi: </b></h5><p> Desa Lumban Suhi Toruan, Hutaraja </p>
                  <h5><b>Ulos yang dapat di buat:</b> </h5>
                    <p>Ulos Batak Toba dan Batak Karo (baik pewarna alami dan sintesis)</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        
          <div class="modal fade" id="edit1"  tabindex="-1" aria-labelledby="edit1Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="edit1Label">Karya dari Si Pengerajin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                  <ul>
                  <li>Ulos Sibolang</li>
                  <li>Ulos Ragi Hidup</li>
                  <li>Ulos Sadum</li>
                  <li>Ulos Ragi Hotang</li>
                  <li>Ulos Mangiring</li>
                  <li>Ulos Simarinjam Sisi</li>
                  <li>Ulos Bintang Maratur</li>
                  <li>Ulos Ragi Huting</li>
                  </ul>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Oke</button>
                </div>
              </div>
            </div>
          </div>
          <!--Akhir Modal-->
        </div>
      <!--Pengerajin 2-->
      <div class="col bulat mt-3">
        <a href="image/pengrajin2.jpeg" class="fancybox" data-fancybox="gallery1">
            <img src="image/pengrajin2.jpeg" class="bd-placeholder-img rounded-circle" width="180" height="180">
        </a>
      <h2>Efriana A. S.</h2>
      <p>Pengrajin di desa ini sudah meliputi dari gadis remaja umur belasan tahun dan orangtua. Pengrajin ini dapat menenun Ulos Batak karo.</p>
      <div class="btn-group"></div>
      <!--Modal-->
      <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#view2">Profile</button>
      <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#edit1">Karya</button>

          <!--Isi Modal-->
          <div class="modal fade" id="view2"  tabindex="-1" aria-labelledby="view2Label" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="view2Label">Tentang Pengerajin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                   <div class="modal-body text-start">
                  <h5><b> Nama:</b> </h5><p> Efriana Ayu Lestari Simarmata</p>
                  <h5><b> Contact Person : </b></h5> 
                    <p><ul>
                      <li>* 087869159927</li>
                  </ul></p>
                  <h5><b> Lokasi: </b></h5><p> Desa Lumban Suhi Toruan, Hutaraja </p>
                  <h5><b>Ulos yang dapat di buat:</b> </h5>
                    <p>Ulos Batak Karo</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        
          <div class="modal fade" id="edit1"  tabindex="-1" aria-labelledby="edit1Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="edit1Label">Tentang Pengerajin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                  <ul>
                  <li>Ulos batak karo </li>
                  <li>Uis Beka Buluh</li>
                  <li>Uis Perembah</li>
                  <li>Uis Arinteneng</li>
                  <li>Uis Julu Berjongkit</li>
                  <li>Uis Gatip</li>
                  <li>DLL</li>
                  </ul>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Oke</button>
                </div>
              </div>
            </div>
          </div>
          <!--Akhir Modal-->
        </div>
        <!--Pengerajin 3-->
      <div class="col bulat mt-5 mb-5">
          <a href="image/pengrajin3.jpeg" class="fancybox" data-fancybox="gallery1">
          <img src="image/pengrajin3.jpeg" class="bd-placeholder-img rounded-circle" width="180" height="180">
          </a>
          <h2>Ratna Sijabat</h2>
          <p>Pengrajin ini dapat menenun segala jenis Ulos Batak Toba dan Batak karo. Hasil ulos yang ditenun berasal dari pewarna sintesis.</p>
        <div class="btn-group"></div>
        <!--Modal-->
      <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#view3">Profile</button>
      <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#edit1">Karya</button>

          <!--Isi Modal-->
          <div class="modal fade" id="view3"  tabindex="-1" aria-labelledby="view3Label" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="view3Label">Tentang Pengerajin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                  <h5><b> Nama:</b> </h5><p>Ratna Sijabat</p>
                  <h5><b> Contact Person : </b></h5> 
                    <p><ul>
                      <li>-</li>
                  </ul></p>
                  <h5><b> Lokasi: </b></h5><p> Desa Lumban Suhi Toruan, Hutaraja </p>
                  <h5><b>Ulos yang dapat di buat:</b> </h5>
                    <p>Ulos Batak Toba dan Batak Karo (Baik pewarna alami dan pewarna sintesis)</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        
          <div class="modal fade" id="edit1"  tabindex="-1" aria-labelledby="edit1Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="edit1Label">Tentang Pengerajin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                  <ul>
                  <li>Ulos Sibolang</li>
                  <li>Ulos Ragi Hidup</li>
                  <li>Ulos Sadum</li>
                  <li>Ulos Ragi Hotang</li>
                  <li>Ulos Mangiring</li>
                  <li>Ulos Simarinjam Sisi</li>
                  <li>Ulos Bintang Maratur</li>
                  <li>Ulos Ragi Huting</li>
                  </ul>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Oke</button>
                </div>
              </div>
            </div>
          </div>
          <!--Akhir Modal-->
            </div>
            <!--Pengerajin 4-->
        <div class="col bulat mt-5 mb-5">
        <a href="image/pengrajin4.jpeg" class="fancybox" data-fancybox="gallery1">
            <img src="image/pengrajin4.jpeg"  class="bd-placeholder-img rounded-circle" width="180" height="180">
        </a>

        <h2>Desnita N. S.</h2>
        <p>Pengrajin di desa ini sudah meliputi dari gadis remaja umur belasan tahun dan orangtua. Pengrajin ini dapat menenun Ulos Batak karo.</p>
        <div class="btn-group"></div>
        <!--Modal-->
        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#view4">Profile</button>
        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#edit1">Karya</button>

          <!--Isi Modal-->
          <div class="modal fade" id="view4"  tabindex="-1" aria-labelledby="view4Label" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="view4Label">Tentang Pengerajin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
               <div class="modal-body text-start">
                  <h5><b> Nama:</b> </h5><p> Desnita Novita Sari Simarmata</p>
                  <h5><b> Contact Person : </b></h5> 
                    <p><ul>
                      <li>083131923316</li>
                  </ul></p>
                  <h5><b> Lokasi: </b></h5><p> Desa Lumban Suhi Toruan, Hutaraja </p>
                  <h5><b>Ulos yang dapat di buat:</b> </h5>
                    <p>Ulos Batak Karo</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        
          <div class="modal fade" id="edit1"  tabindex="-1" aria-labelledby="edit1Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="edit1Label">Tentang Pengerajin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                  <ul>
                  <li>Ulos Sibolang</li>
                  <li>Ulos Ragi Hidup</li>
                  <li>Ulos Sadum</li>
                  <li>Ulos Ragi Hotang</li>
                  <li>Ulos Mangiring</li>
                  <li>Ulos Simarinjam Sisi</li>
                  <li>Ulos Bintang Maratur</li>
                  <li>Ulos Ragi Huting</li>
                  </ul>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Oke</button>
                </div>
              </div>
            </div>
          </div>
        <!--Akhir Modal-->
        </div>
        <!--Pengerajin 5-->
<div class="col bulat mt-5 mb-5">
  <a href="image/pengrajin5.jpeg" class="fancybox" data-fancybox="gallery1">
      <img src="image/pengrajin5.jpeg" class="bd-placeholder-img rounded-circle" width="180" height="180">
  </a>

  <h2>Linda Sinurat</h2>
  <p>Pengrajin ini dapat menenun segala jenis Ulos Batak Toba dan Batak karo. Hasil ulos yang ditenun berasal dari pewarna sintesis.</p>
  <div class="btn-group"></div>
  <!--Modal-->
        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#view5">Profile</button>
        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#edit1">Karya</button>

          <!--Isi Modal-->
          <div class="modal fade" id="view5"  tabindex="-1" aria-labelledby="view5Label" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="view5Label">Tentang Pengerajin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                  <h5><b> Nama:</b> </h5><p>Linda Sinurat</p>
                  <h5><b> Contact Person : </b></h5> 
                    <p><ul>
                      <li>083131923316</li>
                  </ul></p>
                  <h5><b> Lokasi: </b></h5><p> Desa Lumban Suhi Toruan, Hutaraja </p>
                  <h5><b>Ulos yang dapat di buat:</b> </h5>
                    <p>Ulos Batak Toba dan Batak Karo (pewarna sintesis)</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        
          <div class="modal fade" id="edit1"  tabindex="-1" aria-labelledby="edit1Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="edit1Label">Tentang Pengerajin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                  <ul>
                  <li>Ulos Sibolang</li>
                  <li>Ulos Ragi Hidup</li>
                  <li>Ulos Sadum</li>
                  <li>Ulos Ragi Hotang</li>
                  <li>Ulos Mangiring</li>
                  <li>Ulos Simarinjam Sisi</li>
                  <li>Ulos Bintang Maratur</li>
                  <li>Ulos Ragi Huting</li>
                  </ul>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Oke</button>
                </div>
              </div>
            </div>
          </div>
        <!--Akhir Modal-->
        </div>
        <!--Pengerajin 6-->
<div class="col bulat mt-5 mb-5">
  <a href="image/default-porfile.png" class="fancybox" data-fancybox="gallery1">
      <img src="image/default-porfile.png" class="bd-placeholder-img rounded-circle" width="180" height="180">
  </a>

  <h2>Sostiwuana Sinaga</h2>
  <p>Pengrajin ini dapat menenun segala jenis Ulos Batak Toba dan Batak karo. Hasil ulos dapat yang ditenun berasal dari pewarna sintesis.</p>
  <div class="btn-group"></div>
  <!--Modal-->
        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#view6">Profile</button>
        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#edit1">Karya</button>

          <!--Isi Modal-->
          <div class="modal fade" id="view6"  tabindex="-1" aria-labelledby="view6Label" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="view6Label">Tentang Pengerajin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                  <h5><b> Nama:</b> </h5><p>Sostiwuana Sinaga</p>
                  <h5><b> Contact Person : </b></h5> 
                    <p><ul>
                      <li>082370594016</li>
                  </ul></p>
                  <h5><b> Lokasi: </b></h5><p> Desa Lumban Suhi Toruan, Hutaraja </p>
                  <h5><b>Ulos yang dapat di buat:</b> </h5>
                    <p>Ulos Batak Toba dan Batak Karo (pewarna sintesis)</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        
          <div class="modal fade" id="edit1"  tabindex="-1" aria-labelledby="edit1Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="edit1Label">Tentang Pengerajin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                  <ul>
                  <li>Ulos Sibolang</li>
                  <li>Ulos Ragi Hidup</li>
                  <li>Ulos Sadum</li>
                  <li>Ulos Ragi Hotang</li>
                  <li>Ulos Mangiring</li>
                  <li>Ulos Simarinjam Sisi</li>
                  <li>Ulos Bintang Maratur</li>
                  <li>Ulos Ragi Huting</li>
                  </ul>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Oke</button>
                </div>
              </div>
            </div>
          </div>
        <!--Akhir Modal-->
        </div>
        <!--Pengerjain 7-->
<div class="col bulat mt-5 mb-5">
  <a href="image/default-porfile.png" class="fancybox" data-fancybox="gallery1">
      <img src="image/default-porfile.png" class="bd-placeholder-img rounded-circle" width="180" height="180">
  </a>

  <h2>Masita Simarnata</h2>
  <p>Pengrajin ini dapat menenun segala jenis Ulos Batak Toba dan Batak karo. Hasil ulos dapat yang ditenun berasal dari pewarna sintesis.</p>
  <div class="btn-group"></div>
  <!--Modal-->
        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#view7">Profile</button>
        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#karya7">Karya</button>

          <!--Isi Modal-->
          <div class="modal fade" id="view7"  tabindex="-1" aria-labelledby="view7Label" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="view7Label">Tentang Pengerajin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                  <h5><b> Nama:</b> </h5><p>Masita Simarmata</p>
                  <h5><b> Contact Person : </b></h5> 
                    <p><ul>
                      <li>082167411136</li>
                  </ul></p>
                  <h5><b> Lokasi: </b></h5><p> Desa Lumban Suhi Toruan, Hutaraja </p>
                  <h5><b>Ulos yang dapat di buat:</b> </h5>
                    <p>Ulos Batak Toba dan Batak Karo ( pewarna sintesis)</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        
          <div class="modal fade" id="karya7"  tabindex="-1" aria-labelledby="karya7Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="karya7Label">Karya</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                  <ul>
                  <li>Ulos Sibolang</li>
                  <li>Ulos Ragi Hidup</li>
                  <li>Ulos Sadum</li>
                  <li>Ulos Ragi Hotang</li>
                  <li>Ulos Mangiring</li>
                  <li>Ulos Simarinjam Sisi</li>
                  <li>Ulos Bintang Maratur</li>
                  <li>Ulos Ragi Huting</li>
                  </ul>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Oke</button>
                </div>
              </div>
            </div>
          </div>
        <!--Akhir Modal-->
        </div>
        <!--Pengerajin 8-->
<div class="col bulat mt-5 mb-5">
  <a href="image/default-porfile.png" class="fancybox" data-fancybox="gallery1">
      <img src="image/default-porfile.png" class="bd-placeholder-img rounded-circle" width="180" height="180">
  </a>

  <h2>Sonta Situmorang</h2>
  <p>Pengrajin ini dapat menenun segala jenis Ulos Batak Toba dan Batak karo. Hasil ulos yang ditenun berasal dari pewarna alami dan sintesis.</p>
  <div class="btn-group"></div>
  <!--Modal-->
        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#view8">Profile</button>
        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#edit1">Karya</button>

          <!--Isi Modal-->
          <div class="modal fade" id="view8"  tabindex="-1" aria-labelledby="view8Label" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="view8Label">Tentang Pengerajin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                  <h5><b> Nama:</b> </h5><p>Sonta Situmorang</p>
                  <h5><b> Contact Person : </b></h5> 
                    <p><ul>
                      <li>082167411136</li>
                  </ul></p>
                  <h5><b> Lokasi: </b></h5><p> Desa Lumban Suhi Toruan, Hutaraja </p>
                  <h5><b>Ulos yang dapat di buat:</b> </h5>
                    <p>Ulos Batak Toba dan Batak Karo (Baik pewarna alami dan pewarna sintesis)</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        
          <div class="modal fade" id="edit1"  tabindex="-1" aria-labelledby="edit1Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="edit1Label">Tentang Pengerajin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                  <ul>
                  <li>Ulos Sibolang</li>
                  <li>Ulos Ragi Hidup</li>
                  <li>Ulos Sadum</li>
                  <li>Ulos Ragi Hotang</li>
                  <li>Ulos Mangiring</li>
                  <li>Ulos Simarinjam Sisi</li>
                  <li>Ulos Bintang Maratur</li>
                  <li>Ulos Ragi Huting</li>
                  </ul>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Oke</button>
                </div>
              </div>
            </div>
          </div>
        <!--Akhir Modal-->
        </div>
        <!--Pengerajin 9-->
      <div class="col bulat mt-5 mb-5">
        <a href="image/default-porfile.png" class="fancybox" data-fancybox="gallery1">
            <img src="image/default-porfile.png" class="bd-placeholder-img rounded-circle" width="180" height="180">
        </a>

        <h2>Romula Situmorang</h2>
        <p>Pengrajin ini dapat menenun segala jenis Ulos Batak Toba dan Batak karo. Hasil ulos dapat yang ditenun berasal dari pewarna sintesis.</p>
        <div class="btn-group"></div>
  <!--Modal-->
        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#view9">Profile</button>
        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#edit1">Karya</button>

          <!--Isi Modal-->
          <div class="modal fade" id="view9"  tabindex="-1" aria-labelledby="view9Label" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="view9Label">Tentang Pengerajin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                  <h5><b> Nama:</b> </h5><p>Romula Situmorang</p>
                  <h5><b> Contact Person : </b></h5> 
                    <p><ul>
                      <li>081919931339</li>
                  </ul></p>
                  <h5><b> Lokasi: </b></h5><p> Desa Lumban Suhi Toruan, Hutaraja </p>
                  <h5><b>Ulos yang dapat di buat:</b> </h5>
                    <p>Ulos Batak Toba dan Batak Karo (pewarna sintesis)</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        
          <div class="modal fade" id="edit1"  tabindex="-1" aria-labelledby="edit1Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="edit1Label">Tentang Pengerajin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                  <ul>
                  <li>Ulos Sibolang</li>
                  <li>Ulos Ragi Hidup</li>
                  <li>Ulos Sadum</li>
                  <li>Ulos Ragi Hotang</li>
                  <li>Ulos Mangiring</li>
                  <li>Ulos Simarinjam Sisi</li>
                  <li>Ulos Bintang Maratur</li>
                  <li>Ulos Ragi Huting</li>
                  </ul>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Oke</button>
                </div>
              </div>
            </div>
          </div>
        <!--Akhir Modal-->
        </div>
        <!--Pengerajin 10-->
        <div class="col bulat mt-5 mb-5">
          <a href="image/default-porfile.png" class="fancybox" data-fancybox="gallery1">
              <img src="image/default-porfile.png" class="bd-placeholder-img rounded-circle" width="180" height="180">
          </a>

          <h2>Monika Situmorang</h2>
          <p>Pengrajin ini dapat menenun segala jenis Ulos Batak Toba dan Batak karo. Hasil ulos dapat yang ditenun berasal dari pewarna sintesis.</p>
          <div class="btn-group"></div>
          <!--Modal-->
                <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#view10">Profile</button>
                <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#edit1">Karya</button>

          <!--Isi Modal-->
          <div class="modal fade" id="view10"  tabindex="-1" aria-labelledby="view10Label" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="view10Label">Tentang Pengerajin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                  <h5><b> Nama:</b> </h5><p>Monika Situmorang</p>
                  <h5><b> Contact Person : </b></h5> 
                    <p><ul>
                      <li>087893728571</li>
                  </ul></p>
                  <h5><b> Lokasi: </b></h5><p> Desa Lumban Suhi Toruan, Hutaraja </p>
                  <h5><b>Ulos yang dapat di buat:</b> </h5>
                    <p>Ulos Batak Toba dan Batak Karo (pewarna sintesis)</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        
          <div class="modal fade" id="edit1"  tabindex="-1" aria-labelledby="edit1Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="edit1Label">Tentang Pengerajin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                  <ul>
                  <li>Ulos Sibolang</li>
                  <li>Ulos Ragi Hidup</li>
                  <li>Ulos Sadum</li>
                  <li>Ulos Ragi Hotang</li>
                  <li>Ulos Mangiring</li>
                  <li>Ulos Simarinjam Sisi</li>
                  <li>Ulos Bintang Maratur</li>
                  <li>Ulos Ragi Huting</li>
                  </ul>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Oke</button>
                </div>
              </div>
            </div>
          </div>
          <!--Akhir Modal-->
        </div>
            </div><!-- /.row -->
          </div>
        </section>
@endsection


        