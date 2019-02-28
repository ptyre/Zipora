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
    <a class="navbar-brand" href="{{route('index')}}">

      <svg style="margin-left:25px;" class="logosvg menuGambarSisi" width="100" height="100" viewBox="0 0 81 81" >
        <defs>
          <linearGradient id="linear-gradient" x1="0.5" y1="0.5" x2="0.204" y2="0.821" gradientUnits="objectBoundingBox">
            <stop offset="0" stop-color="#fa0"/>
            <stop offset="1" stop-color="#ff6f00"/>
          </linearGradient>
          <filter id="Path_1" x="0" y="0" width="81" height="81" filterUnits="userSpaceOnUse">
            <feOffset dx="3" dy="3" input="SourceAlpha"/>
            <feGaussianBlur stdDeviation="5" result="blur"/>
            <feFlood flood-color="#2d2929" flood-opacity="0.149"/>
            <feComposite operator="in" in2="blur"/>
            <feComposite in="SourceGraphic"/>
          </filter>
        </defs>
        <g id="Group_24" data-name="Group 24" transform="translate(-35 -19)">
          <g class="logoZipora-3" transform="matrix(1, 0, 0, 1, 35, 19)">
            <path id="Path_1-2" data-name="Path 1" class="logoZipora-1" d="M25.5,0A25.5,25.5,0,1,1,0,25.5,25.5,25.5,0,0,1,25.5,0Z" transform="translate(12 12)"/>
          </g>
          <path id="Path_8" data-name="Path 8" class="logoZipora-2" d="M77.424,19.331l38.279.138.594.75.844,1.125.688,1.078.641,1.094L119,24.578l.469.969.484,1.219L89.763,43.972l30.268.013-.219.578-.172.438-.312.75-.422.891-.375.7-.281.516-.391.641-.391.656-.453.641-.516.75-.531.672-.786.872-37.6-.231-.391-.469-.687-.844-.656-.937-.687-1.062L74.547,47.5l-.609-1.187-.625-1.406-.25-.641L103.079,27.4l-30.24-.009.318-.893.516-1.231.536-1.131.536-.992.6-.992.576-.893.754-1.032Z" transform="translate(-24 21)"/>
        </g>
      </svg>
    </a>
    <a class="menuGambarSisi" href="{{route('galerry.judul')}}">Back</a>

  </div>
</div>
@endsection

@section('content')
<div class="kumpulan-gambar">


<table class="tableBacground">
  @if(!empty($json))
  <?php foreach (array_chunk($json , 5)as $dat): ?>
<tr class="list-inline gallery">
    <?php foreach ($dat as $gbr): ?>
      <td class="img-circle zoom">
            <img class="rounded-circle zoom thumbnail " src="{{$gbr->pict}}" style="height:200px; width:200px;"/>
      </td>
    <?php endforeach; ?>

</tr>
  <?php endforeach; ?>
  @else
  <td>TIDAK ADA FOTO</td>
  @endif


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
