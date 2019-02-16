@extends('pages.master', ['title' => 'news'])


@section('css')
<link href="{{asset('css/pages/news-dan-article.css')}}" rel="stylesheet">
@endsection

@section('content')
@foreach ($json as $j)
<section class="home-slider js-fullheight owl-carousel">

      <div class="slider-item js-fullheight" style="background-image:url({{$j->pict}});">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">{{$j->judul}}</h1>
	            <p class="breadcrumbs"><span></span>  <span><h4>{{$j->tgl}}</h4></span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

  <section>
    <div class="container">
      <div class="card">

        {{$j->informasi}}
      </div>
    </div>


  </section>
@endforeach
@endsection


@section('script')
  @parent

@endsection
