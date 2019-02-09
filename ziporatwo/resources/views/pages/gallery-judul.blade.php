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
  <table>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
  </table>

</div>

@endsection


@section('script')
  @parent
    <script src="{{asset('vendor/javascript/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('vendor/javascript/jquery.mousewheel.min.js')}}"></script>
    <script src="{{asset('vendor/javascript/masonry.pkgd.min.js')}}"></script>

@endsection
