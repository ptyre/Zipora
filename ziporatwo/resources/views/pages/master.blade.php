<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('css')
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/nav.css')}}" rel="stylesheet">

    <title></title>
  </head>
  <body>
<header>
      @include('pages.partial.navbar')
</header>


    @yield('header')

    @yield('content')

<script src="{{asset('js/nav.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
    @stack('script')
  </body>
</html>
