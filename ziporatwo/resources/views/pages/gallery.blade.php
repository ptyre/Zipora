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
    <a href="{{route('galerry.judul')}}">Back</a>

  </div>
</div>
@endsection

@section('content')
<div class="kumpulan-gambar">


<table class="tableBacground">

  <?php foreach (array_chunk($json , 5)as $dat): ?>
<tr>
    <?php foreach ($dat as $gbr): ?>
      <td >

        <a href="{{$gbr->pict}}"&lt;b&gt;{{$gbr->tgl}}&lt;/b&gt;&lt;br /&gt;{{$gbr->info}}">
          <img class="rounded-circle" src="{{$gbr->pict}}" style="height:200px; width:200px;"/>
        </a>
      </td>
    <?php endforeach; ?>

</tr>
  <?php endforeach; ?>


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
