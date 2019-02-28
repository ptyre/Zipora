@extends('pages.master', ['title' => 'Gallery'])

@section('css')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="{{asset('css/pages/gallery.css')}}" rel="stylesheet">
<link href="{{asset('vendor/css/jquery.fancybox.min.css')}}" rel="stylesheet">

@endsection

@section('navigasi')


@endsection

@section('content')
<div class="menuGallery">
<section class="headerMGJ">
  <h1 class="judulgambar">Judul</h1>
</section>

<section class="headerMG">
  <div class="container">
    @foreach(array_chunk($data['image'], 3) as $dt)
    <div class="row">
      @foreach($dt as $dta)
        <div class="contGambar col-md-auto">

          <form method="POST" enctype="multipart/form-data" action="{{ route('gallery') }}">
            {{ csrf_field() }}
            <input type="hidden" name="_jenis" id="_jenis" value="{{$dta['id_jenisgalery']}}" ></input>
            <input type="submit" value="" style="background:url({{$dta['pict']}}) no-repeat;" class="foto-1"></input>

          </form>
          <h3>{{ $dta['nama_jenis'] }}</h3>
          <h3><p>Jumlah Photo: {{$dta['jumlah']}}</h3>
        </div>
        @endforeach
      </div>
      @endforeach
    </div>
</section>





@endsection


@section('script')
  @parent
    <script src="{{asset('vendor/javascript/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('vendor/javascript/jquery.mousewheel.min.js')}}"></script>
    <script src="{{asset('vendor/javascript/masonry.pkgd.min.js')}}"></script>

@endsection
