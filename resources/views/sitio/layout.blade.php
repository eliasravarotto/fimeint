<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/icon" href="{{asset('images/fav.png')}}"/>
    @yield('title_and_meta')
    <!--===============================================================================================-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--===============================================================================================-->
    <link rel="shortcut icon" href="{{asset('imagenes/logos/dyv_64x64_icono.ico')}}">
    <!--===============================================================================================-->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css" />
    <!--===============================================================================================-->
    <!-- Slick slider -->
    <link href="{{asset('css/slick.css')}}" rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
    <!--===============================================================================================-->
    <!-- Google Fonts Raleway -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700" rel="stylesheet">
    <!-- Google Fonts Open sans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet"> 
    <!--===============================================================================================-->
     @yield('mark-up-facebook')
     @yield('styles')
	</head>
  <body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v6.0"></script>
   <!--SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

  	<!-- Start Header -->
	@include('sitio.includes.header')

	<!-- Start main content -->
	<main>
		@yield('content')
	</main>
	
	<!-- Start footer -->
	@include('sitio.includes.footer')

	<!-- Scripts -->
	<!--  include 'includes/script.php';	 -->
	<!--===============================================================================================-->
	<!-- Facebook -->
	<div id="fb-root"></div>
	<!--===============================================================================================-->
	<!-- Main -->
	<script src="{{ mix('js/app.js') }}"></script>
	<!--===============================================================================================-->
	<!-- Owl Carucel -->
	{{-- <script src="{{ asset('js/owl.carousel.min.js') }}"></script> --}}
	<!--===============================================================================================-->
  <!-- Progress Bar -->
  <script src="https://unpkg.com/circlebars@1.0.3/dist/circle.js"></script>
  <!-- Slick slider -->
  <script type="text/javascript" src="{{asset('js/slick.min.js') }}"></script>
  <!-- Filterable Gallery js -->
  <script type="text/javascript" src="{{asset('js/jquery.filterizr.min.js') }}"></script>
  <!-- Gallery Lightbox -->
  <script type="text/javascript" src="{{asset('js/jquery.magnific-popup.min.js') }}"></script>
	
  </body>
</html>