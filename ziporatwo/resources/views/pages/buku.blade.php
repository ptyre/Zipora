@extends('pages.master', ['title' => 'Home'])
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="{{asset('css/pages/navigasi-atas.css')}}" rel="stylesheet">
<link href="{{asset('css/pages/default.css')}}" rel="stylesheet">
<link href="{{asset('css/pages/demo4.css')}}" rel="stylesheet">
<link href="{{asset('css/pages/bookblock.css')}}" rel="stylesheet">


@section('css')

@endsection

@section('navigasi')
@endsection

@section('content')
<div class="container">
			<div class="bb-custom-wrapper">

				<div id="bb-bookblock" class="bb-bookblock">
					<div class="bb-item">
						<div class="bb-custom-firstpage">
							Kunpulan buku mate
						</div>
						<div class="bb-custom-side">
							<p>Pastry bear claw oat cake danish croissant jujubes danish. Wypas soufflé muffin. Liquorice powder pastry danish. Candy toffee gummi bears chocolate bar lollipop applicake chocolate cake danish brownie.</p>
						</div>
					</div>


					<div class="bb-item">
						<div class="bb-custom-side">
              <div class="ukuranGambar">
              <img></img>
              </div>
						</div>
						<div class="bb-custom-side">
              <div class="penjelassanIsi">
							<p>sasasaasaasasasasas</p>
            </div>
						</div>
					</div>


					<div class="bb-item">
						<div class="bb-custom-side">
							<p>Croissant pudding gingerbread gummi bears marshmallow halvah. Wafer donut croissant. Cookie muffin jelly beans pie croissant croissant candy canes jelly marshmallow.</p>
						</div>
						<div class="bb-custom-side">
							<p>Wafer donut caramels chocolate caramels sweet roll. Gummi bears powder candy chocolate cake gummi bears icing wafer cupcake. Brownie cotton candy pastry chocolate wypas.</p>
						</div>
					</div>


					<div class="bb-item">
						<div class="bb-custom-side">
							<p>Marzipan dragée candy canes chocolate cake. Soufflé faworki jelly gingerbread cupcake. Powder gummies applicake.</p>
						</div>
						<div class="bb-custom-side">
							<p>Cotton candy caramels tootsie roll soufflé powder lemon drops carrot cake danish. Cotton candy candy canes fruitcake muffin gingerbread. Jujubes soufflé gingerbread donut donut.</p>
						</div>
					</div>
					<div class="bb-item">
						<div class="bb-custom-side">
							<p>Jujubes fruitcake tiramisu liquorice chocolate cake. Carrot cake faworki donut soufflé oat cake tootsie roll. Fruitcake fruitcake cake sweet pie jelly beans. Chocolate cake candy jujubes oat cake toffee croissant muffin.</p>
						</div>
						<div class="bb-custom-side">
							<p>Chocolate bar tiramisu marzipan. Croissant soufflé croissant lollipop liquorice dragée chupa chups carrot cake. Liquorice lollipop halvah toffee lollipop.</p>
						</div>
					</div>
				</div>

				<nav>
					<a id="bb-nav-first" href="#" class="bb-custom-icon bb-custom-icon-first">First page</a>
					<a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>
					<a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>
					<a id="bb-nav-last" href="#" class="bb-custom-icon bb-custom-icon-last">Last page</a>
				</nav>

			</div>

		</div><!-- /container -->

    <div>

      <div>
@endsection

@section('script')
  @parent
<script src="{{asset('js/pages2/buku.js')}}"></script>
<script src="{{asset('js/pages2/modernizr.custom.js')}}"></script>
<script src="{{asset('js/pages2/jquerypp.custom.js')}}"></script>
<script src="{{asset('js/pages2/jquery.bookblock.js')}}"></script>
<script>Page.init();</script>
@endsection
