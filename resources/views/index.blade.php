@extends('master.master')

@section('content')

<!-- About Section -->
<div id="about">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6 ">
          <div class="about-img"><img src="{{asset('img/intro-bg.jpg')}}" class="img-responsive" alt=""></div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="about-text ">
            <h2>About Us</h2>
            <hr>
            <p>Martabak Robby merupakan sebuah bisnis yang bergerak dalam bidang kuliner makanan. Didirikan sejak tahun 2000 dengan konsep kaki lima. </p>
            <p>Nama Robby sendiri itu diambil dari nama anak ketiga dari bapak Rosidi. Saat ini martabak Robby sudah memiliki cabang lebih dari 10 dan tersebar didaerah Bekasi utara, Babelan.</p>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- End About Section -->

<!-- Restaurant Menu Section -->
  <div id="restaurant-menu">
    <div class="section-title text-center center">
      <div class="overlay">
        <h2>Menu</h2>
        <hr>
        <p>Martabak Robby mempunyai 3 Menu, Yaitu Martabak Manis, Martabak Telur Ayam, dan Martabak Telur Bebek</p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section">
            <h2 class="menu-section-title ">Martabak Manis Sedang</h2>
            <hr>
            @foreach ($menus as $item)
            @if($item->category == "Manis Sedang")
            <div class="menu-item">
              <div class="menu-item-name"> {{ $item->product_name }} </div>
              <div class="menu-item-price"> {{ $item->product_price }} </div>
              <div class="menu-item-description"> {{ $item->description }}</div>
            </div>
            @endif
            @endforeach
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section">
            <h2 class="menu-section-title">Martabak Manis Besar</h2>
            <hr>
            @foreach ($menus as $item)
            @if($item->category == "Manis Jumbo")
            <div class="menu-item">
              <div class="menu-item-name"> {{ $item->product_name }} </div>
              <div class="menu-item-price"> {{ $item->product_price }} </div>
              <div class="menu-item-description"> {{ $item->description }}</div>
            </div>
            @endif
            @endforeach
          </div>
        </div>
    </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section">
            <h2 class="menu-section-title">Martabak Telur Ayam</h2>
            <hr>
            @foreach ($menus as $item)
            @if($item->category == "Telur Ayam")
            <div class="menu-item">
              <div class="menu-item-name"> {{ $item->product_name }} </div>
              <div class="menu-item-price"> {{ $item->product_price }} </div>
              <div class="menu-item-description"> {{ $item->description }}</div>
            </div>
            @endif
            @endforeach
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section">
            <h2 class="menu-section-title">Martabak Telur Bebek</h2>
            <hr>
            @foreach ($menus as $item)
            @if($item->category == "Telur Bebek")
            <div class="menu-item">
              <div class="menu-item-name"> {{ $item->product_name }} </div>
              <div class="menu-item-price"> {{ $item->product_price }} </div>
              <div class="menu-item-description"> {{ $item->description }}</div>
            </div>
            @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- End Menu Section -->
<div id="gojek" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-10 col-md-offset-1 section-title">
        <h2>DiGojekin Aja!</h2>
        <hr>
        <p><strong> buat kamu yang lagi males keluar tapi pengen nyobain Martabak Robby, 
          tenang aja sekarang Martabak Robby sudah hadir diGofood jadi jangan sampai kehabisan ya!</strong></p>
          <a href="https://gofood.link/u/ejLO9"><button class="btn btn-custom btn-lg">Order Now</button></a><br>
          <img src="{{asset('img/')}}/gofood.png" width="20%" alt="">   
      </div>
    </div>
  </div>
</div>


<!-- Gallery Section -->
    <section id="Gallery">
      <div class="container">
        <div class="row">
          <div class="col-xs-11 col-md-10 col-centered text-center">
            <a>Martabak Robby and Customers </a>
            <br><a>Gallery</a>
      
  
            <div id="carousel" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="2500">
              <div class="carousel-inner">
                <div class="item active">
                  @foreach ($galleries as $item)
                  <div class="carousel-col">
                    <div class="row"><a href="{{ asset('uploads/gallery/' . $item->input_picture) }}"><img src="{{ asset('uploads/gallery/' . $item->input_picture) }}" class="img-fluid"
                      alt="" width="100%"></a></div>  
                    </div>
                    @endforeach
                  </div>
              </div>
      
              <!-- Controls -->
              <div class="left carousel-control">
                <a href="#carousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
              </div>
              <div class="right carousel-control">
                <a href="#carousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
      
          </div>
        </div>
      </div> 
    </section>
<!-- End Gallery Section -->

<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title text-center">
      <h2>Contact US</h2>
      <hr>
      <p>Kami akan selalu memberikan yang terbaik untuk customer. jika ada pertanyaan bisa hubungi nomor dibawah, atau bisa kirim pesan melalui form yang ada dibawah.</p>
    </div>
    <div class="row contact-info">      
      @foreach ($branches as $item)            
        <div class="col-md-4">                 
            <div class="contact-address">                     
              <i class="fa-3x fas fa-map-marker-alt"></i>
              <h5><strong> {{ $item->branch_name }}</strong></h5>
              <address> {{ $item->address }} </address>
              <p><a>{{ $item->phone_number }}</a></p>
            </div>
          </div>          
      @endforeach
    </div>             
    <div class="row text-center-justify">    
      <div class="col">                 
          <div class="contact-email">                     
            <i class="fa-2x far fa-envelope"></i>                    
            <h3>Email</h3>                     
            <p><a href="mailto:info@example.com">martabakrobby@gmail.com</a></p>                 
          </div>             
        </div>   
    </div>      

    <div class="col-md-10 col-md-offset-1">
      <form enctype="multipart/form-data" action="{{ route('admin.message.store') }}" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" name="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" name="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
      </div>
    </form>
   </div>
  </div>
</div>
 

@stop
