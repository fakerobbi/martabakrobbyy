@extends('Master.Master')

@section('content')

<section class="home-slider owl-carousel img" style="background-image: url('{{asset('images/intro-bg.jpg') }}');">
  <div class="slider-item">
    <div class="overlay"></div>
  <div class="container">
    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

      <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <span class="subheading">Welcome To</span>
        <h1 class="mb-4">Martabak Robby Site</h1>
        <p class="mb-4 mb-md-5">Eat martabak everyday can make you happy.</p>
      </div>

    </div>
  </div>
</div>

    <div class="slider-item">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text align-items-center" data-scrollax-parent="true">

          <div class="col-md-6 col-sm-12 ftco-animate">
              <span class="subheading">Martabak Manis</span>
            <h1 class="mb-4">Keju Cokelat Susu</h1>
            <p class="mb-4 mb-md-5">Martabak manis dengan campuran toping keju, cokelat,dan susu.</p>
            <p> <a href="{{url('/Menu')}}" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
          </div>
          <div class="col-md-6 ftco-animate">
              <img src="{{ asset('images/kejucokelat.png' ) }}" class="img-fluid" alt="">
          </div>

        </div>
      </div>
    </div>

    <div class="slider-item">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text align-items-center" data-scrollax-parent="true">

          <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
              <span class="subheading">Martabak Telur</span>
            <h1 class="mb-4">Telur 4 Istimewa</h1>
            <p class="mb-4 mb-md-5">Martabak telur bebek dengan campuran daun bawang pilihan dan daging rendang sapi.</p>
            <p><a href="{{url('/Menu')}}" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
          </div>
          <div class="col-md-6 ftco-animate">
              <img src="{{ asset('images/kejucokelat.png' ) }}" class="img-fluid" alt="">
          </div>

        </div>
      </div>
    </div>

</section>


<section class="ftco-intro">
    <div class="container-wrap">
        <div class="wrap d-md-flex">
            <div class="info">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-phone"></span></div>
                        <div class="text">
                            <h3>+6282126074007</h3>
                            <p>Robby</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-my_location"></span></div>
                        <div class="text">
                            <h3>Jl. Raya Ps. Babelan</h3>
                            <p>Babelan Kota Kec. Babelan, Bekasi, Jawa Barat 17610</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-clock-o"></span></div>
                        <div class="text">
                            <h3>Buka Senin - Minggu</h3>
                            <p>15.00 WIB - 12:00 WIB</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-md-flex pl-md-5 p-4 align-items-center">
                <ul class="social-icon">
          <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
        </ul>
            </div>
        </div>
    </div>
</section>

<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url('{{asset('images/intro-bg.jpg') }}');"></div>
    <div class="one-half ftco-animate">
    <div class="heading-section ftco-animate ">
      <h2 class="mb-4">A little About Martabak Robby</h2>
    </div>
    <div>
              <p>Martabak Robby merupakan sebuah bisnis yang bergerak dalam bidang kuliner makanan. Didirikan sejak tahun 2000 dengan konsep kaki lima. Nama Robby sendiri itu diambil dari nama anak ketiga dari bapak Rosidi. Saat ini martabak Robby sudah memiliki cabang lebih dari 10 dan tersebar didaerah Bekasi utara, Babelan.</p>
          </div>
    </div>
</section>


<section class="ftco-section ftco-services">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Our Services</h2>
        <p>Kami menyediakan berbagai macam layanan untuk pelanggan setia kami.</p>
      </div>
    </div>
        <div class="row">
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
            <i class="fas fa-glass-cheers fa-3x"></i>
          </div>
          <div class="media-body">
            <h3 class="heading">Weeding Party / Khitanan </h3>
            <p>Kami bisa melayani pemesanan untuk acara pernikahan atau khitanan.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
            <i class="fas fa-money-bill-wave fa-3x"></i>
          </div>
          <div class="media-body">
            <h3 class="heading">Friendly Price</h3>
            <p>Harga yang terjangkau tetapi tidak mengurangi cita rasa dari Martabak Robby</p>
          </div>
        </div>      
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5"><i class="fas fa-utensils fa-3x"></i></div>
          <div class="media-body">
            <h3 class="heading">Original Recipes</h3>
            <p>Resep asli turun menurun akan selalu kami jaga untuk kualitas dari Martabak Kami</p>
          </div>
        </div>    
      </div>
    </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Menu</h2>
            <p>Martabak Robby mempunyai 3 Menu, Yaitu Martabak Manis, Martabak Telur Ayam, dan Martabak Telur Bebek</p>
          </div>
      </div>
    </div>
    <div class="container-wrap">
      <div class="row no-gutters d-flex">
        @foreach ($menus as $item)
         
            <div class="col-lg-4 d-flex ftco-animate"> 
                <div class="services-wrap d-flex">
                  <a class="img" style="background-image: url('{{asset('uploads/menu/' . $item->input_picture) }}');"> </a>
                    <div class="text p-4">
                        <h3>{{ $item->product_name }}</h3>
                        <p>{{ $item->description }} </p>
                        <p class="price"><span>Rp. {{ $item->product_price}} </span> 
                    </div>
                </div>
              </div>
         
          @endforeach
        </div>
        <div class="row mt-5">
            <div class="col text-center">
              <div class="block-27">
                <p><a href="{{url('/Menu')}}" class="btn btn-primary p-3 px-xl-4 py-xl-3 ftco-animate">View Our Menu</a></p>
              </div>
            </div>
        </div>
  </div>
</section>

<section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="{{asset('images/1.jpg') }}" class="gallery img d-flex align-items-center" style="background-image: url('{{asset('images/1.jpg') }}');">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="{{asset('images/kejucokelat.png') }}" class="gallery img d-flex align-items-center" style="background-image: url('{{asset('images/kejucokelat.png') }}');">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="{{asset('images/2.jpg') }}" class="gallery img d-flex align-items-center" style="background-image: url('{{asset('images/2.jpg') }}');">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="{{asset('images/telor.jpg') }}" class="gallery img d-flex align-items-center" style="background-image: url('{{asset('images/telor.jpg') }}');">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                    </a>
                </div>
            </div>
           
        </div>
</section>


{{-- <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                      <div class="icon"><span class="flaticon-pizza-1"></span></div>
                      <strong class="number" data-number="100">0</strong>
                      <span>Martabak Robby Branches</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                      <div class="icon"><span class="flaticon-medal"></span></div>
                      <strong class="number" data-number="85">0</strong>
                      <span>Number of Awards</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                      <div class="icon"><span class="flaticon-laugh"></span></div>
                      <strong class="number" data-number="10567">0</strong>
                      <span>Happy Customer</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                      <div class="icon"><span class="flaticon-chef"></span></div>
                      <strong class="number" data-number="900">0</strong>
                      <span>Staff</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
</section> --}}

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Our Branch</h2>
        <p>Saat ini MARTABAK ROBBY sudah mempunyai 10 cabang. Cabang MARTABAK ROBBY tersebar di daerah bekasi dan sekitarnya. Dan MARTABAK ROBBY akan memperluas cakupan usahanya hingga keseluruh indonesia, AAMIIN. </p>
      </div>
    </div>
    <div class="row d-flex">
      @foreach ($branches as $item)
      <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
          <a href="{{ asset('uploads/branch/' . $item->input_picture) }}"> <img src="{{ asset('uploads/branch/' . $item->input_picture) }}" class="block-20"></a>
          <div class="text py-4 d-block">
              <div class="meta">
              <div><a href="tel:{{ $item->phone_number }}">{{ $item->phone_number }}</a></div>
              <div><a href="tel:{{ $item->phone_number }}">({{ $item->person_in_charge }})</a></div>
          </div>
            <h3 class="heading mt-2"><a href="{{url('/Branch')}}">{{ $item->branch_name }}</a></h3>
            <p>{{ $item->address }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <div class="row mt-5">
    <div class="col text-center">
      <div class="block-27">
        <p><a href="{{url('/Branch')}}" class="btn btn-primary p-3 px-xl-4 py-xl-3 ftco-animate">View Our Branch</a></p>
      </div>
    </div>
  </div>
  
</section>

    
<section class="ftco-appointment">
        <div class="overlay"></div>
    <div class="container-wrap">
        <div class="row no-gutters d-md-flex align-items-center">
            <div class="col-md-6 d-flex align-self-stretch">
                <div id="gmp-canvas" class="ftco-animate">
                  <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1domR2dPmv1yvAgtQGZE6aNO2tOOm38Aq" width="680" height="680"></iframe>
                </div>
                <style>
                .gmap_canvas {
                 overflow: hidden;
                 position: relative;
                 background: none !important;
                 height: 0;
                 padding-bottom: 56.25%;
                  }
                .gmap_canvas iframe {
                 left: 0;
                 top: 0;
                 height: 100%;
                 width: 100%;
                 position: absolute;
                  }
                </style>
            </div>
            <div class="col-md-6 appointment ftco-animate">
                <h3 class="mb-3">Contact Us</h3>
                <form enctype="multipart/form-data" action="{{route('admin.message.store') }}" method="POST">
                   @csrf
                    <div class="d-md-flex">
                        <div class="form-group">
                          <input type="text" id="name" name="name" class="form-control" placeholder="Name" required="required">
                        </div>
                    </div>
                    <div class="d-me-flex">
                        <div class="form-group">
                          <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                      <textarea name="message" id="message" name="message" class="form-control" rows="4" placeholder="Message" required="required"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send" class="btn btn-primary py-3 px-4">
            </div>
                </form>
            </div>    			
        </div>
    </div>
</section>


@stop
