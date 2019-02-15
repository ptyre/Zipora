@extends('pages.master', ['title' => 'news'])


@section('css')
<link href="{{asset('css/pages/news-dan-article.css')}}" rel="stylesheet">
@endsection

@section('content')
<section class="home-slider js-fullheight owl-carousel">
      <div class="slider-item js-fullheight" style="background-image:url(images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Judul</h1>
	            <p class="breadcrumbs"><span><h4>oleh Hardi</h4></span>  <span><h4>tanggal 4 maret</h4></span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

  <section>
    <div class="container">
      <div class="card">


        <h2>A simple description</h2>


        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, <i>sed</i> diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata <span>sanctus</span> est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod <b>tempor</b> invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

      </div>
    </div>


  </section>

@endsection


@section('script')
  @parent

@endsection
