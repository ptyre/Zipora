@extends('pages.master', ['title' => 'Buku'])


@section('css')
<link href="{{asset('css/pages/index.css')}}" rel="stylesheet">
@endsection


@section('header')

<div class="wadah-text-judul">
      <div class="tulisan">
        <h3>
          Welcome!
        </h3>
      </div>
    </div>
    <div class="gambar-besar"></div>

@endsection



@section('content')
  <div class="navigation">
    <button id="sized" class="menu">
      <span></span>
    </button>
      <div id="myModal" class="modal">
      <!-- Modal content -->
        <div class="modal-content animated           zoomIn">
        <div class="modal-header">
           <span class="close">×</span>
       </div>

      <div class="modal-body nav">
  			<nav>
  	    <ul>
  				<div id="shape-container">
  					<ul id="sqrs">
  						<li id="sqr-1-1" class="sqr">
  							<a class="sqr-txt" href="#">home</a>
  						</li>
  						<li id="sqr-1-2" class="sqr">
  							<a class="sqr-txt" href="#">about</a>
  						</li>
  						<li id="sqr-1-3" class="sqr">
  							<a class="sqr-txt" href="#">contact</a>
  						</li>
  						<li id="sqr-2-1" class="sqr">
  							<a class="sqr-txt" href="#">classes</a>
  						</li>
  						<li id="sqr-2-2" class="sqr">
  							 <a class="sqr-txt" href="#">bacon</a>
  						</li>
  						<li id="sqr-3-1" class="sqr">
  							<a class="sqr-txt" href="#">other</a>
  						</li>

  					</ul>
  				</div>
  				</div>
  	        </ul>
  	</nav>
    </div>
  </div>
</div>


<div class="mengerikan">
      <div class="left-skew">
      </div>
      <div class="right-skew">
      </div>
</div>



<div class="isiweb1">

  <section class="home">
    </section>
  <div class="isidata">
    <div class="simbol">
       <i class="fa fa-anchor fa-2x"></i>
     </div>

     <ul id="tagline">
        <li class="tagline-element">
          <a href="#"><i class="fa fa-cog fa-fw fa-4x"></i></a>
          <h3>SLEEK DESIGN</h3>
          <p class="tagline-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non gravida dui. Aenean pellentesque arcu malesuada ipsum egestas, ut varius orci dictum. Cras viverra faucibus congue.
          </p>
        </li>
        <li class="tagline-element">
          <a href="#"><i class="fa fa-heart-o fa-fw fa-4x"></i></a>
          <h3>CLEAN CODE</h3>
          <p class="tagline-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non gravida dui. Aenean pellentesque arcu malesuada ipsum egestas, ut varius orci dictum. Cras viverra faucibus congue.
          </p>
        </li>
        <li class="tagline-element">
          <a href="#"><i class="fa fa-lightbulb-o fa-fw fa-4x"></i></a>
          <h3>CREATIVE IDEAS</h3>
          <p class="tagline-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non gravida dui. Aenean pellentesque arcu malesuada ipsum egestas, ut varius orci dictum. Cras viverra faucibus congue.
          </p>
        </li>
        <li class="tagline-element">
          <a href="#"><i class="fa fa-comments-o fa-fw fa-4x"></i></a>
          <h3>FREE SUPPORT</h3>
          <p class="tagline-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non gravida dui. Aenean pellentesque arcu malesuada ipsum egestas, ut varius orci dictum. Cras viverra faucibus congue.
          </p>
        </li>
      </ul>
  </div>




</div>

  <div class="pembatas"></div>








@endsection

@push('script')

<script src="{{asset('js/pages2/pilihan.js')}}"></script>
<script src="{{asset('js/pages2/page1.js')}}"></script>
@endpush
