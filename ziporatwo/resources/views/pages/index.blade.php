@extends('pages.master', ['title' => 'Buku'])


@section('css')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="{{asset('css/pages/index.css')}}" rel="stylesheet">
<link href="{{asset('css/nav.css')}}" rel="stylesheet">
@endsection


@section('navigasi')
         <header>
            <nav class="menubaru">
               <div class="menu-icon">
                  <i class="fa fa-bars fa-2x"></i>
               </div>
               <div class="logo">
                  <a href="#">LOGO</a>
               </div>
               <div class="menu">
                  <ul>
                     <li><a href="#berita">News</a></li>
                     <li><a href="#cerita">Article</a></li>
                     <li><a href="#">Contact</a></li>
                     <li><a href="#">Contact</a></li>
                     <li><a href="#">Contact</a></li>
                  </ul>
               </div>
            </nav>
         </header>





@endsection



@section('content')

<a id="berita">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
          <table style="width:100%">
            <td>
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
                    <a href="#" class="read-more">read more</a>
                </div>
              </td>
              <td>
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
                    <a href="#" class="read-more">read more</a>
                </div>



            </div>
            </td>
        </div>
    </div>
</div>
</a>

<a id="cerita">
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
</a>

@endsection

@section('script')
  @parent
  <script src="{{asset('js/pages2/nav.js')}}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
@endsection
