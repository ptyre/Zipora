@extends('pages.master', ['title' => 'Buku'])


@section('css')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="{{asset('css/pages/index.css')}}" rel="stylesheet">
<link href="{{asset('css/pages/article.css')}}" rel="stylesheet">
<link href="{{asset('css/nav.css')}}" rel="stylesheet">
<link href="{{asset('vendor/css/owl.carousel.min.css')}}" rel="stylesheet">
@endsection


@section('navigasi')
         <header>
            <nav class="menubaru">
               <div class="menu-icon">
                  <i class="fa fa-bars fa-2x"></i>
               </div>
               <div class="logo">
                  <a href="#"><img class="gambarlogo" src="{{asset('images/zipora.ico')}}"></img></a>
               </div>
               <div class="menu">
                  <ul>
                     <li><a href="#berita">News</a></li>
                     <li><a href="#cerita">Article</a></li>
                     <li><a href="#buku">Buku</a></li>
                     <li><a href="#kelas">Class</a></li>
                     <li><a href="#kontak">Contact</a></li>
                  </ul>
               </div>
            </nav>
         </header>







@endsection



@section('content')

<section id="berita">
<div class="card">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="news-slider" class="owl-carousel">
                <div class="post-slide">
                    <div class="post-header">
                        <a href="#" class="subtitle">Lorem ipsum</a>
                        <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                    </div>
                    <div class="pic">
                        <img src="images/img-1.jpg" alt="">
                    </div>
                    <ul class="post-bar">
                        <li><i class="fa fa-users"></i> <a href="#">Admin</a></li>
                        <li><i class="fa fa-clock-o"></i> March 5,2016</li>
                        <li><i class="fa fa-comments"></i> <a href="#">2 Comment</a></li>
                    </ul>
                    <p class="post-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
                    </p>
                    <a href="#" class="read-more"><button class="btn btn-primary">Join</button></a>
                </div>

                <div class="post-slide">
                    <div class="post-header">
                        <a href="#" class="subtitle">Lorem ipsum</a>
                        <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                    </div>
                    <div class="pic">
                        <img src="images/img-2.jpg" alt="">
                    </div>
                    <ul class="post-bar">
                        <li><i class="fa fa-users"></i> <a href="#">Admin</a></li>
                        <li><i class="fa fa-clock-o"></i> March 7,2016</li>
                        <li><i class="fa fa-comments"></i> <a href="#">3 Comment</a></li>
                    </ul>
                    <p class="post-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
                    </p>
                    <a href="#" class="read-more"><button class="btn btn-primary">Join</button></a>
                </div>

                <div class="post-slide">
                    <div class="post-header">
                        <a href="#" class="subtitle">Lorem ipsum</a>
                        <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                    </div>
                    <div class="pic">
                        <img src="images/img-2.jpg" alt="">
                    </div>
                    <ul class="post-bar">
                        <li><i class="fa fa-users"></i> <a href="#">Admin</a></li>
                        <li><i class="fa fa-clock-o"></i> March 7,2016</li>
                        <li><i class="fa fa-comments"></i> <a href="#">3 Comment</a></li>
                    </ul>
                    <p class="post-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
                    </p>
                    <a href="#" class="read-more"><button class="btn btn-primary">Join</button></a>
                </div>



            </div>
        </div>
    </div>
  </div>
</div>
</section>

<section>
<div id="pemisahnews" class="card">
  <a id="buttonpemisah"><button class="btn btn-primary">See More</button></a>
</div>
</section>

<section id="cerita">
<div class="card" id="warna-border" >
   <div class="card-body">
     <h3 class="card-title row h-100 justify-content-center align-items-center">Article</h3>
<div class="carousel-wrap">
  <div class="owl-carousel">
    <div class="item"><img src="http://placehold.it/150x150"></div>
    <div class="item"><img src="http://placehold.it/150x150"></div>
    <div class="item"><img src="http://placehold.it/150x150"></div>
    <div class="item"><img src="http://placehold.it/150x150"></div>
    <div class="item"><img src="http://placehold.it/150x150"></div>
    <div class="item"><img src="http://placehold.it/150x150"></div>
    <div class="item"><img src="http://placehold.it/150x150"></div>
    <div class="item"><img src="http://placehold.it/150x150"></div>
    <div class="item"><img src="http://placehold.it/150x150"></div>
    <div class="item"><img src="http://placehold.it/150x150"></div>
    <div class="item"><img src="http://placehold.it/150x150"></div>
    <div class="item"><img src="http://placehold.it/150x150"></div>
  </div>
</div>
</div>
</div>
</section>

<section id="buku">
  <div class="container">
    <table>
      <tr>
        <td>
          <img class="gambarBuku" src="https://www.w3schools.com/css/trolltunga.jpg">
        </td>
        <td>
<textbox class="deskripsiBuku">
  #right content in there<br>
  #right content in there<br>
  #right content in there<br>
  #right content in there<br>
  #right content in there<br>
  #right content in there<br>
  #right content in there<br>
  #right content in there<br>
  #right content in there<br>
  #right content in there<br>
  </textbox>
        </td>
      </tr>
    </table>
</div>
</section>

<section id="kelas">
  <div class="card">
  <div class="content">
     <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
     </p>
     <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
     </p>
     <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
     </p>
     <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
     </p>
  </div>
</div>
</div>
</section>

<section id="kontak">
  <div class="content">
     <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
     </p>
     <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
     </p>
     <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
     </p>
     <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
     </p>
  </div>
</div>
</section>

@endsection

@section('script')
  @parent
  <script src="{{asset('js/pages2/nav.js')}}"></script>
  <script src="{{asset('vendor/javascript/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('vendor/javascript/jquery.mousewheel.min.js')}}"></script>
  <script src="{{asset('vendor/javascript/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/pages2/page1.js')}}"></script>
@endsection
