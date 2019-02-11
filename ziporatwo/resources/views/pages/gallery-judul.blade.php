@extends('pages.master', ['title' => 'Gallery'])

@section('css')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="{{asset('css/pages/gallery.css')}}" rel="stylesheet">
<link href="{{asset('vendor/css/jquery.fancybox.min.css')}}" rel="stylesheet">

@endsection

@section('navigasi')

<div class="navigasi-atas">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
</div>

@endsection

@section('content')
<div>
<section>
</section>
<section>
  <table>
    <tr>
        <td><a><div class="gambar-1"></div></a></td>
        <td><a><div class="gambar-2"></div></a></td>
        <td><a><div class="gambar-3"></div></a></td>
    </tr>
    <tr>
        <td><a><div class="gambar-4"></div></a></td>
        <td><a><div class="gambar-5"></div></a></td>
        <td><a><div class="gambar-6"></div></a></td>
    </tr>
    <tr>
        <td><a><div class="gambar-7"></div></a></td>
        <td><a><div class="gambar-8"></div></a></td>
        <td><a><div class="gambar-9"></div></a></td>
    </tr>
  </table>
</section>
</div>

@endsection


@section('script')
  @parent
    <script src="{{asset('vendor/javascript/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('vendor/javascript/jquery.mousewheel.min.js')}}"></script>
    <script src="{{asset('vendor/javascript/masonry.pkgd.min.js')}}"></script>

@endsection
