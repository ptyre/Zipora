@extends('pages.master', ['title' => 'Gallery'])

@section('css')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="{{asset('css/pages/gallery.css')}}" rel="stylesheet">
<link href="{{asset('vendor/css/jquery.fancybox.min.css')}}" rel="stylesheet">

@endsection

@section('navigasi')



<div class="side-menu-gallery">
  <div class="menu-pinggir">
    <a href="#about">Logo</a>
    <a href="#services">Section name</a>
    <a href="#back">Back</a>

  </div>
</div>
@endsection

@section('content')
<div class="kumpulan-gambar">


<table>
<tr>
  <td>
    <a href="https://source.unsplash.com/IvfoDk30JnI/1500x1000" data-fancybox data-caption="&lt;b&gt;Single photo&lt;/b&gt;&lt;br /&gt;Caption can contain &lt;em&gt;any&lt;/em&gt; HTML elements">
      <img class="rounded-circle" src="https://source.unsplash.com/IvfoDk30JnI/240x160" />

    </a>
  </td>
  <td>
    <a href="https://source.unsplash.com/0JYgd2QuMfw/1500x1000" data-fancybox data-caption="This image has a simple caption">
      <img class="rounded-circle" src="https://source.unsplash.com/0JYgd2QuMfw/240x160" />
    </a>
  </td>
  <td>
    <a href="https://source.unsplash.com/xAgvgQpYsf4/1500x1000" data-fancybox>
      <img class="rounded-circle" src="https://source.unsplash.com/xAgvgQpYsf4/240x160" />
    </a>
  </td>
  <td>
  </td>
</tr>
</table>


</div>
@endsection


@section('script')
  @parent
    <script src="{{asset('vendor/javascript/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/pages2/gallery.js')}}"></script>
    <script src="{{asset('vendor/javascript/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('vendor/javascript/jquery.mousewheel.min.js')}}"></script>
@endsection
