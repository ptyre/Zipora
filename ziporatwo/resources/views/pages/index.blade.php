@extends('pages.master', ['title' => 'Home'])


@section('css')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="{{asset('css/pages/index.css')}}" rel="stylesheet">
<link href="{{asset('css/pages/article.css')}}" rel="stylesheet">
<link href="{{asset('css/pages/footer.css')}}" rel="stylesheet">
<link href="{{asset('css/nav.css')}}" rel="stylesheet">
<link href="{{asset('vendor/css/owl.carousel.min.css')}}" rel="stylesheet">
@endsection


@section('navigasi')
         <header>
            <nav id="menubaruid" class="menubaru">
               <div class="menu-icon">
                  <button onclick="myFunction()" class="btn btn-primary dropbtn">Dropdown</button>
               </div>

               <div class="logo">
                  <a href="#">


                    <svg class="logosvg" width="50" height="50" viewBox="0 0 81 81" >
                      <defs>
                        <linearGradient id="linear-gradient" x1="0.5" y1="0.5" x2="0.204" y2="0.821" gradientUnits="objectBoundingBox">
                          <stop offset="0" stop-color="#fa0"/>
                          <stop offset="1" stop-color="#ff6f00"/>
                        </linearGradient>
                        <filter id="Path_1" x="0" y="0" width="81" height="81" filterUnits="userSpaceOnUse">
                          <feOffset dx="3" dy="3" input="SourceAlpha"/>
                          <feGaussianBlur stdDeviation="5" result="blur"/>
                          <feFlood flood-color="#2d2929" flood-opacity="0.149"/>
                          <feComposite operator="in" in2="blur"/>
                          <feComposite in="SourceGraphic"/>
                        </filter>
                      </defs>
                      <g id="Group_24" data-name="Group 24" transform="translate(-35 -19)">
                        <g class="logoZipora-3" transform="matrix(1, 0, 0, 1, 35, 19)">
                          <path id="Path_1-2" data-name="Path 1" class="logoZipora-1" d="M25.5,0A25.5,25.5,0,1,1,0,25.5,25.5,25.5,0,0,1,25.5,0Z" transform="translate(12 12)"/>
                        </g>
                        <path id="Path_8" data-name="Path 8" class="logoZipora-2" d="M77.424,19.331l38.279.138.594.75.844,1.125.688,1.078.641,1.094L119,24.578l.469.969.484,1.219L89.763,43.972l30.268.013-.219.578-.172.438-.312.75-.422.891-.375.7-.281.516-.391.641-.391.656-.453.641-.516.75-.531.672-.786.872-37.6-.231-.391-.469-.687-.844-.656-.937-.687-1.062L74.547,47.5l-.609-1.187-.625-1.406-.25-.641L103.079,27.4l-30.24-.009.318-.893.516-1.231.536-1.131.536-.992.6-.992.576-.893.754-1.032Z" transform="translate(-24 21)"/>
                      </g>
                    </svg>
                  </a>
               </div>
               <div class="menu">
                  <ul>
                    <table class="table-menu">
                      <td>
                      <li><a href="#berita">News</a></li>
                    </td>
                    <td>
                      <li><a href="#cerita">Article</a></li>
                    </td>
                    <td>
                      <li><a href="#buku">Buku</a></li>
                    </td>
                    <td>
                      <li><a href="#kelas">Class</a></li>
                    </td>
                    <td>
                      <li><a href="#kontak">Contact</a></li>
                    </td>
                    </table>

                  </ul>
               </div>
            </nav>

         </header>
<div>

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





@endsection



@section('content')




<section id="berita">
<div class="card">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="news-slider" class="owl-carousel">

            <?php foreach ($variable as $key => $value): ?>


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

            <?php endforeach; ?>




            </div>
        </div>
    </div>
  </div>

  <div id="buttonpemisah">
    <a href="#">
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

<div id="buttonpemisah">
<a href="#" >



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



<!-- <section id="buku">
    <div class="mybros">
    <div class="kolum" style="background-color:orange;">
      <h2>Column 1</h2>
      <p>Some text..</p>
    </div>
    <div class="kolum" style="background-color:black;">
      <h2>Column 2</h2>
      <p>Some text..</p>
    </div>
  </div>
</section>

<section id="kelas">

    <div class="mybros">
    <div class="kolum" style="background-color:#aaa;">
      <h2>Column 1</h2>
      <p>Some text..</p>
    </div>
    <div class="kolum" style="background-color:#bbb;">
      <h2>Column 2</h2>
      <p>Some text..</p>
    </div>
  </div>
</div>

</section> -->



<section id="kontak">

  <div class="footer-kontak">
    <p>Footer man is here</p>
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
