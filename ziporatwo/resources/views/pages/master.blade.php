<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('css')
    <link href="asset('css/app.css')" rel="stylesheet">

    <title></title>
  </head>
  <body>
    @include('pages.partial.navbar')

    @yield('content')

    <link href="asset('js/app.js')">
    @yield('script')
  </body>
</html>
