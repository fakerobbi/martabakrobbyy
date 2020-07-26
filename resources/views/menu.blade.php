@extends('Master.Master')

@section('content')

<section class="home-slider owl-carousel img" style="background-image: url('{{asset('images/intro-bg.jpg') }}');">

    <div class="slider-item" style="background-image: url('{{asset('images/intro-bg.jpg') }}');">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-3 mt-5 bread">Our Menu</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home</a></span> <span>Menu</span></p>
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
            <h2 class= ftco-animate>Martabak Manis Sedang</h2>
        <div class="row no-gutters d-flex">
            @foreach ($menus as $item) 
            @if($item->category == "Manis Sedang")
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
            @endif
            @endforeach
        </div>
     </div>
<hr>
    <div class="container-wrap">
        <h2 class= ftco-animate>Martabak Manis Besar</h2>
    <div class="row no-gutters d-flex">
        @foreach ($menus as $item) 
        @if($item->category == "Manis Jumbo")
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
        @endif
        @endforeach
    </div>
 </div>
<hr>
<div class="container-wrap">
    <h2 class= ftco-animate>Martabak Telur Ayam</h2>
<div class="row no-gutters d-flex">
    @foreach ($menus as $item) 
    @if($item->category == "Telur Ayam")
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
    @endif
    @endforeach
</div>
</div>
<hr>
<div class="container-wrap">
    <h2 class= ftco-animate>Martabak Telur Bebek</h2>
<div class="row no-gutters d-flex">
    @foreach ($menus as $item) 
    @if($item->category == "Telur Bebek")
    <div class="col-lg-4 d-flex ftco-animate"> 
        <div class="services-wrap d-flex">
          <a class="img" style="background-image: url('{{asset('uploads/menu/' . $item->input_picture) }}');"> </a>
            <div class="text p-4">
                <h3>{{ $item->product_name }}</h3>
                <p>{{ $item->description }} </p>
                <p class="price"><span>Rp. {{ $item->product_price}} </span> </p>   
            </div>
        </div>
      </div>
    @endif 
    @endforeach
</div>
</div>
</section>
@stop
