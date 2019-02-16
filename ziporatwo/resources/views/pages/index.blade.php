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

                  <form method="POST" class="read-more" action="#">
                  {{ csrf_field() }}
                      <input type="hidden" class="read-more" name="_id" value="{{ $nw['id'] }}"><button class="btn btn-primary">Read more</button></input>
                  </form>
              </div>

            <?php endforeach; ?>




            </div>
        </div>

  </div>


  <div id="buttonpemisah">
    <a href="{{route('news.seemore')}}">
      <svg class="button-pemisah-svg" width="150" height="50" viewBox="0 0 267 75.839">
        <defs>
      <linearGradient id="linear-gradient" x1="0.578" y1="0.5" x2="-0.03" y2="1.405" gradientUnits="objectBoundingBox">
        <stop offset="0" stop-color="#fa0"/>
        <stop offset="1" stop-color="#ff6f00"/>
      </linearGradient>
      <filter id="Rectangle_6" x="0" y="0" width="267" height="75.839" filterUnits="userSpaceOnUse">
        <feOffset dy="3" input="SourceAlpha"/>
        <feGaussianBlur stdDeviation="0.5" result="blur"/>
        <feFlood flood-opacity="0.149"/>
        <feComposite operator="in" in2="blur"/>
        <feComposite in="SourceGraphic"/>
      </filter>
    </defs>
    <g id="Group_38" data-name="Group 38" transform="translate(-826.5 -2063.831)">
      <g class="readmorebutton-3" transform="matrix(1, 0, 0, 1, 826.5, 2063.83)">
        <rect id="Rectangle_6-2" data-name="Rectangle 6" class="readmorebutton-1" width="264" height="71.339" rx="35.669" transform="translate(1.5)"/>
      </g>
      <text id="see_more" data-name="see more" class="readmorebutton-2" transform="translate(897 2111)"><tspan x="0" y="0">see more</tspan></text>
    </g>
  </svg>

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

        <div class="col-sm-3">
                          <div class="col-item">
                              <div class="photo">
                                <p class="judul-gambar">
                                    {{$atr['judul']}}</p>
                                  <img src="{{$atr['pict']}}"style="height:150px; width:150px;" class="img-responsive rounded" alt="images not found" />

                                  <div class="tanggal-gambar" class="price-text-color">
                                      {{$atr['tgl']}}

                                      <div>
                                        <form method="POST" class="read-more" action="#">
                                          {{ csrf_field() }}
                                          <input type="hidden" class="read-more" name="_id" value="{{ $nw['id'] }}"><button class="button-article rounded">Read more</button></input>
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
<a href="article.seemore" >



  <svg class="button-pemisah-svg" width="150" height="50" viewBox="0 0 267 75.839">
    <defs>
  <linearGradient id="linear-gradient" x1="0.578" y1="0.5" x2="-0.03" y2="1.405" gradientUnits="objectBoundingBox">
    <stop offset="0" stop-color="#fa0"/>
    <stop offset="1" stop-color="#ff6f00"/>
  </linearGradient>
  <filter id="Rectangle_6" x="0" y="0" width="267" height="75.839" filterUnits="userSpaceOnUse">
    <feOffset dy="3" input="SourceAlpha"/>
    <feGaussianBlur stdDeviation="0.5" result="blur"/>
    <feFlood flood-opacity="0.149"/>
    <feComposite operator="in" in2="blur"/>
    <feComposite in="SourceGraphic"/>
  </filter>
</defs>
<g id="Group_38" data-name="Group 38" transform="translate(-826.5 -2063.831)">
  <g class="readmorebutton-3" transform="matrix(1, 0, 0, 1, 826.5, 2063.83)">
    <rect id="Rectangle_6-2" data-name="Rectangle 6" class="readmorebutton-1" width="264" height="71.339" rx="35.669" transform="translate(1.5)"/>
  </g>
  <text id="see_more" data-name="see more" class="readmorebutton-2" transform="translate(897 2111)"><tspan x="0" y="0">see more</tspan></text>
</g>
</svg>


</a>
</div>
</div>

</div>

</section>



<section id="kontak">

  <div class="footer-kontak">
    <p>Footer man is here</p>
  </div>

</section>



@endsection

@section('script')
  @parent

  <script src="{{asset('js/pages2/page1.js')}}"></script>
@endsection
