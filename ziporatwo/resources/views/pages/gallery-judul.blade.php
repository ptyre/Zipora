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
<div class="menuGallery">
<section class="headerMGJ">
  <h1>judul</h1>
</section>

<section class="headerMG">
  <table class="tableMG">
    <tr>
        <td class="contGambar">
          <form>
            {{ csrf_field() }}
            <input type="submit" value="" style="background:url(/images/foto-background/foto-1.jpg) no-repeat;" class="foto-1"></input>
          </form>
        </td>
        <td class="contGambar">
          <form>
            {{ csrf_field() }}
            <input type="submit" value="" class="foto-2"></input>
          </form>
      </td>
        <td class="contGambar">
          <form>
            {{ csrf_field() }}
            <input type="submit" value="" class="foto-3"></input>
          </form>
      </td>
    </tr>
    <tr>
      <td>IALC @ DE JAVA</td>
      <td>IALC @ HOTEL ASTON</td>
      <td>Live Coach Praticioner</td>
    </tr>
    <tr>
      <td class="contGambar1">
        <form>
          {{ csrf_field() }}
          <input type="submit" value="" class="foto-4"></input>
        </form>
      </td>
      <td class="contGambar">
        <form>
          {{ csrf_field() }}
          <input type="submit" value="" class="foto-5"></input>
        </form>
        </td>
      <td class="contGambar1">
        <form>
          {{ csrf_field() }}
          <input type="submit" value="" class="foto-6"></input>
        </form>
      </td>
    </tr>
    <tr>
        <td>MOar</td>
        <td>Moar</td>
        <td>Moar</td>
    </tr>
    <tr>
      <td class="contGambar">
        <form>
          {{ csrf_field() }}
          <input type="submit" value="" class="foto-7"></input>
        </form>
      </td>
      <td class="contGambar">
        <form>
          {{ csrf_field() }}
          <input type="submit" value="" class="foto-8"></input>
        </form>
      </td>
      <td class="contGambar">
        <form>
          {{ csrf_field() }}
          <input type="submit" value="" class="foto-9"></input>
        </form>
      </td>
    </tr>
    <tr>
        <td>MOar</td>
        <td>Moar</td>
        <td>Moar</td>
    </tr>
  </table>
  <div class="row">
    <div class="">

    </div>
  </div>
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
