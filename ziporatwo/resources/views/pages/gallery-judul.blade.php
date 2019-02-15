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
    @foreach(array_chunk($data['tes'], 3) as $dt)
    <tr>
      @foreach($dt as $dta)
        <td class="contGambar">

          <form method="POST" enctype="multipart/form-data" action="{{ route('gallery') }}">
            {{ csrf_field() }}
            <input type="hidden" name="_jenis" id="_jenis" value="{{$dta['id_jenisgalery']}}" ></input>
            <input type="submit" value="" style="background:url({{$dta['pict']}}) no-repeat;" class="foto-1"></input>

          </form>
          <span>{{ $dta['nama_jenis'] }}</span>
          <span><p>Jumlah Photo: {{$dta['jumlah']}}</span>
        </td>
        @endforeach
      </tr>
      @endforeach
    </table>
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
