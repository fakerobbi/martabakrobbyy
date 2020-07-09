<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Martabak Robby</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome/css/font-awesome.css')}}">
<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet' href='{{asset('dist/css/1.0.0/bootstrap3-showmanyslideonecarousel.min.css')}}'>


<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/nivo-lightbox/nivo-lightbox.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/nivo-lightbox/default.css')}}">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <script src="https://kit.fontawesome.com/b8024034b4.js" crossorigin="anonymous"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">Martabak Robby</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="#about" class="page-scroll">About Us</a></li>
        <li><a href="#restaurant-menu" class="page-scroll">Our Menu</a></li>
        <li><a href="#Gallery" class="page-scroll">Gallery</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro" style="background-image: url({{asset('img/intro-bg.jpg')}});">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>Martabak Robby</h1>
            <p>Eat everyday can makes ur happy.</p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">Get Started</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>

@yield('content')

 <!-- footer_start  -->
 <div id="footer">
  <div class="container text-center">
    <div class="col-md-4">
      <h3>Address</h3>
      <div class="contact-item">
        <p> Jl. Raya Ps. Babelan, Babelan Kota</p>
        <p>Kec. Babelan, Bekasi, Jawa Barat 17610</p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Opening Hours</h3>
      <div class="contact-item">
        <p>Mon-Thurs: 04:00 PM - 12:00 PM</p>
        <p>Fri-Sun: 04:00 AM - 00:30 AM</p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Contact Info</h3>
      <div class="contact-item">
        <p>Phone: +62 82126074007</p>
        <p>Email: martabakrobby@gmail.com</p>
      </div>
    </div>
  </div>
  <div class="container-fluid text-center copyrights">
    <div class="col-md-8 col-md-offset-2">
      <div class="social">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
      <p>&copy; 2020 Martabak Robby. All rights reserved. Made with Made with <i class="fa fa-heart"></i> <a href="https://www.instagram.com/fakerobbii/">  by Robbi Baharudinsyah</a></p>
    </div>
  </div>
</div>
<!-- footer_end  -->

  <script type="text/javascript" src="{{asset('js/jquery.1.11.1.js')}}"></script> 
  <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script> 
  <script type="text/javascript" src="{{asset('js/SmoothScroll.js')}}"></script> 
  <script type="text/javascript" src="{{asset('js/nivo-lightbox.js')}}"></script> 
  <script type="text/javascript" src="{{asset('js/jquery.isotope.js')}}"></script> 
  <script type="text/javascript" src="{{asset('js/jqBootstrapValidation.js')}}"></script> 
  {{-- <script type="text/javascript" src="js/contact_me.js"></script>  --}}
  <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
  <script>
$('.carousel[data-type="multi"] .item').each(function() {
	var next = $(this).next();
	if (!next.length) {
		next = $(this).siblings(':first');
	}
	next.children(':first-child').clone().appendTo($(this));

	for (var i = 0; i < 2; i++) {
		next = next.next();
		if (!next.length) {
			next = $(this).siblings(':first');
		}

		next.children(':first-child').clone().appendTo($(this));
	}
});
  </script>
<script src="https://kit.fontawesome.com/12cea8388b.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('sweet::alert')
  </body>
  </html>
  