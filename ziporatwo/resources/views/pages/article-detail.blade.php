@extends('pages.master', ['title' => 'news'])


@section('css')
<link href="{{asset('css/pages/news-dan-article.css')}}" rel="stylesheet">
@endsection

@section('content')

<?php foreach ($json as $ar): ?>

<section class="home-slider js-fullheight owl-carousel">

      <div class="slider-item js-fullheight" style="background-image:url({{$ar->pict}});">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">{{$ar->judul}}</h1>
	            <p class="breadcrumbs"><span></span>  <span><h4>{{$ar->tgl}}</h4></span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

  <section>

    <div class="container">
      <div class="card">

        {!!html_entity_decode($ar->informasi)!!}

      </div>
    </div>
  </section>
<?php endforeach; ?>
@endsection


@section('script')
  @parent

@endsection
