@extends('pages.master', ['title' => 'Home'])


@section('css')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="{{asset('css/pages/index.css')}}" rel="stylesheet">
<link href="{{asset('css/pages/article.css')}}" rel="stylesheet">
<link href="{{asset('css/pages/footer.css')}}" rel="stylesheet">

@endsection

@section('content')

<section class="home-slider js-fullheight owl-carousel">
<div class="slider-item js-fullheight" style="background-image:url(/images/foto-background/cropped-IMG_3768.jpg);">
<div class="overlay"></div>
<div class="container">
<div class="row slider-text justify-content-center align-items-center">

  <div class="col-md-7 col-sm-12 text-center ftco-animate">
    <table class="tablenamaZipora">
      <tr>
      <td class="huruf-nama-1">Z</td>
      <td class="huruf-nama-2">I</td>
      <td class="huruf-nama-1">P</td>
      <td class="huruf-nama-2">O</td>
      <td class="huruf-nama-1">R</td>
      <td class="huruf-nama-2">A</td>
      <td class="huruf-nama-1"> </td>
      <td class="huruf-nama-2"> </td>
      <td class="huruf-nama-1">T</td>
      <td class="huruf-nama-2">R</td>
      <td class="huruf-nama-1">I</td>
      <td class="huruf-nama-2">E</td>
      <td class="huruf-nama-1"> </td>
      <td class="huruf-nama-2"> </td>
      <td class="huruf-nama-1">W</td>
      <td class="huruf-nama-2">A</td>
      <td class="huruf-nama-1">R</td>
      <td class="huruf-nama-2">D</td>
      <td class="huruf-nama-1">H</td>
      <td class="huruf-nama-2">A</td>
      <td class="huruf-nama-1">N</td>
      <td class="huruf-nama-2">I</td>
    </tr>
    <tr>
      <td class="welcome-header" colspan="22"><h5>Welcome To Official Zipora Trie Wardhani Website</h5></td>
    <tr>

    </table>
  </div>

</div>
</div>
</div>
</section>
<section class="ftco-services bg-light">
			<div class="container">

			</div>
		</section>
<section id="berita">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="news-slider" class="owl-carousel">

            <?php foreach ($data['newsEvent'] as $nw): ?>

              <div class="post-slide">
                  <div class="post-header">
                    <hidden></hidden>
                      <a href="#" class="subtitle">{{ $nw['tentang'] }}</a>
                      <h3 class="post-title"><a href="#">{{ $nw['judul'] }}</a></h3>
                  </div>
                  <div class="pic">
                      <img src="{{ $nw['pict'] }}" alt="images not found">
                  </div>
                  <ul class="post-bar">
                      <li><i class="fa fa-clock-o"></i> {{ $nw['tgl'] }}</li>
                  </ul>
                  <p  class="batasnews post-description">
                      {{ $nw['informasi'] }}
                  </p>

                  <form method="POST" class="read-more" action="{{route('news')}}">
                  {{ csrf_field() }}
                      <input type="hidden" class="read-more" name="_id" value="{{ $nw['id'] }}"></input>
                      <button type="submit" class="btn btn-primary">Read more</button>
                  </form>
              </div>

            <?php endforeach; ?>




            </div>
        </div>

  </div>


  <div id="buttonpemisah">
    <a href="{{route('news.seemore')}}">
      <button class="btn-pemisah-mk2">see more</button>
  </a>
  </div>

</div>
</section>

<section>

</section>

<section id="cerita">
<div class="card" id="warna-border" >
   <div class="card-body">
     <h3 class="card-title row h-100 justify-content-center align-items-center">Article</h3>
<div class="carousel-wrap">
  <div class="owl-carousel">

    <?php foreach (array_slice($data['article'], 0, 2) as $atr) : ?>
      <div class="item">
        <div class="col-sm-12">
                          <div class="col-item">
                            <div class="card ukuranCard">
                        <img class="card-img-top" src="{{$atr['pict']}}" alt="Image not found">
                        <div class="card-body warnacard">
                          <h5 class="card-title">  {{$atr['judul']}}</h5>
                          <p class="card-text batasarticle">{{ $atr['informasi'] }}</p>
                          <div class="tanggal-gambar" class="price-text-color">
                              {{$atr['tgl']}}
                          </div>
                          <div class="ukuranbuttonread">
                            <form method="POST" class="read-more" action="{{route('article')}}">
                              {{ csrf_field() }}
                              <input type="hidden" class="read-more" name="_id" value="{{ $atr['id'] }}"></input>
                              <button type="submit" class="button-article">Read more</button>
                            </form>
                        </div>
                        </div>

                      </div>

                          </div>
                      </div>
      </div>



    <?php endforeach; ?>

  </div>
</div>

<div id="buttonpemisah">
<a href="{{route('article.seemore')}}" >
  <button class="btn-pemisah-mk2">see more</button>
</a>
</div>
</div>

</div>

</section>





@endsection

@section('script')
  @parent

  <script src="{{asset('js/pages2/page1.js')}}"></script>
@endsection
