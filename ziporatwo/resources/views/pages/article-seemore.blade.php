@extends('pages.master', ['title' => 'news'])


@section('css')
<link href="{{asset('css/pages/news-dan-article.css')}}" rel="stylesheet">
@endsection

@section('content')
<section class="home-slider js-fullheight owl-carousel">
      <div class="slider-item js-fullheight" style="background-image:url('/images/foto-background/Gambar-Article.jpg');">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Article</h1>
            </div>

          </div>
        </div>
      </div>
    </section>

  <section>
<div class="firmalar">
    <div class="container">
      <?php foreach ($data['article'] as $news): ?>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-12">
                <div class="firma-card row">
                    <div class="col-md-5 img-padding-no">
                        <div class="firma-resim" style="background:url({{$news['pict']}}) no-repeat;">
                            <a href="#">

                            </a>
                        </div>
                    </div>
                    <div class="col-md-7">

                        <div class="card-body">
                            <h4>{{ $news['judul'] }}</h4>
                            <ul class="yacht-info__list space-2">
                              <div class="pengaturan">  {!!strip_tags($news['informasi'])!!}
                              </div>
                            </ul>
                                <form method="POST" class="read-more" action="{{route('article')}}">
                                  {{ csrf_field() }}
                                  <input type="hidden" class="read-more" name="_id" value="{{$news['id']}}"></input>
                                  <button type="submit" class="btn btn-success">Read more</button>
                                </form>




                        </div>
                    </div>
                </div>


            </div>
            <div class="col-md-2"></div>
        </div>
      <?php endforeach; ?>

    </div>
    </div>


  </section>

@endsection


@section('script')
  @parent

@endsection
