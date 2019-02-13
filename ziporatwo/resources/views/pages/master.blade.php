<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('css')
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/pages/open-iconic-bootstrap.min.css') }}">
    	 <link rel="stylesheet" href="{{ asset('css/pages/animate.css') }}">

    	 <link rel="stylesheet" href="{{ asset('css/pages/owl.carousel.min.css') }}">
    	 <link rel="stylesheet" href="{{ asset('css/pages/owl.theme.default.min.css') }}">
    	 <link rel="stylesheet" href="{{ asset('css/pages/magnific-popup.css') }}">

    	 <link rel="stylesheet" href="{{ asset('css/pages/aos.css') }}">

    	 <link rel="stylesheet" href="{{ asset('css/pages/ionicons.min.css') }}">

    	 <link rel="stylesheet" href="{{ asset('css/pages/bootstrap-datepicker.css') }}">
    	 <link rel="stylesheet" href="{{ asset('css/pages/jquery.timepicker.css') }}">


    	 <link rel="stylesheet" href="{{ asset('css/pages/flaticon.css') }}">
    	 <link rel="stylesheet" href="{{ asset('css/pages/icomoon.css') }}">
    	 <link rel="stylesheet" href="{{ asset('css/pages/style.css') }}">
    <link href="{{asset('css/nav.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/css/owl.carousel.min.css')}}" rel="stylesheet">

    <title></title>
  </head>
  <body data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0" style="padding-top: 0px !important;">
    @include('pages.partial.navbar')
    @yield('navigasi')
    @yield('content')


<script href="{{asset('js/app.js')}}"></script>
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="{{ asset('vendor/javascript/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/javascript/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('vendor/javascript/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/javascript/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/javascript/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('vendor/javascript/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/javascript/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('vendor/javascript/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/javascript/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('vendor/javascript/aos.js') }}"></script>
    <script src="{{ asset('vendor/javascript/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('vendor/javascript/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('vendor/javascript/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('vendor/javascript/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('vendor/javascript/google-map.js') }}"></script>
    <script src="{{ asset('vendor/javascript/main.js') }}"></script>
    @yield('script')
  </body>
</html>
