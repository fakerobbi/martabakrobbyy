@extends('Master.Master')

@section('content')

<section class="home-slider owl-carousel img" style="background-image: url('{{asset('images/intro-bg.jpg') }}');">

    <div class="slider-item" style="background-image: url('{{asset('images/intro-bg.jpg') }}');">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-3 mt-5 bread">Our Branch</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home</a></span> <span>Our Branch</span></p>
          </div>

        </div>
      </div>
    </div>
  </section>
  

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Our Branch</h2>
          <p>Saat ini MARTABAK ROBBY sudah mempunyai 10 cabang. Cabang MARTABAK ROBBY tersebar di daerah bekasi dan sekitarnya. Dan MARTABAK ROBBY akan memperluas cakupan usahanya hingga keseluruh indonesia, AAMIIN..</p>
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
              <h3 class="heading mt-2"><a href="#">{{ $item->branch_name }}</a></h3>
              <p>{{ $item->address }}</p>
              <p> Buka Hari : Senin - Minggu <br> Jam Buka : 15.00 WIB - 12:00 WIB</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div id="gmp-canvas" class=" row justify-content-center ftco-animate">
        <iframe src="https://www.google.com/maps/d/embed?mid=1domR2dPmv1yvAgtQGZE6aNO2tOOm38Aq" width="640" height="480"></iframe>
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
  </section>

@stop
