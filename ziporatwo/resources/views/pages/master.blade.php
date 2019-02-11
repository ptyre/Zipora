<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('css')
    <link href="{{asset('css/app.css')}}" rel="stylesheet">


    <title></title>
  </head>
  <body data-spy="scroll" data-target=".menubaru" data-offset="50">
@yield('navigasi')
@yield('content')

<script href="{{asset('js/app.js')}}"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    @yield('script')
  </body>
</html>
