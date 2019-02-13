@extends('pages.master', ['title' => 'Gallery'])

@section('css')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="{{asset('css/pages/gallery.css')}}" rel="stylesheet">
<link href="{{asset('css/pages/navigasi-atas.css')}}" rel="stylesheet">
<link href="{{asset('vendor/css/jquery.fancybox.min.css')}}" rel="stylesheet">

@endsection

@section('navigasi')


@endsection

@section('content')
<div class="menuGallery">
<section class="headerMGJ">
  <h1>judul</h1>
</section>

<section class="headerMG">
  <table class="tableMG">
    @foreach(array_chunk($data, 3) as $dt)
    <tr>
      @foreach($dt as $dta)
        <td class="contGambar">

          <form action="">
            {{ csrf_field() }}
            <input type="submit" value="" style="background:url({{$dta['pict']}}) no-repeat;" class="foto-1"></input>
            <span>{{ $dta['nama_jenis'] }}</span>
            <span>menghitung</span>
          </form>
        </td>
        @endforeach
      </tr>
      @endforeach
      </section>
</div>
<div class="footerGallery">

</div>


@endsection


@section('script')
  @parent
    <script src="{{asset('vendor/javascript/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('vendor/javascript/jquery.mousewheel.min.js')}}"></script>
    <script src="{{asset('vendor/javascript/masonry.pkgd.min.js')}}"></script>

@endsection
