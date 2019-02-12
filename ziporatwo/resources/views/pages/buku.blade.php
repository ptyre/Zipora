@extends('pages.master', ['title' => 'Home'])



@section('css')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="{{asset('css/pages/navigasi-atas.css')}}" rel="stylesheet">
<link href="{{asset('css/pages/default.css')}}" rel="stylesheet">
<link href="{{asset('css/pages/demo4.css')}}" rel="stylesheet">
<link href="{{asset('css/pages/bookblock.css')}}" rel="stylesheet">
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
							<p></p>
						</div>
					</div>

          <?php foreach ($data['buku'] as $bk): ?>

            <div class="bb-item">
  						<div class="bb-custom-side">
                <div class="ukuranGambar">
                <img src="{{ $bk['pict'] }}"></img>
                </div>
  						</div>
  						<div class="bb-custom-side">
                <div class="penjelassanIsi">
  							<table>
                  <tr>
                    <td><h3>{{ $bk['judul_buku'] }}<h3></td>
                  </tr>
                  <tr>
                    <td><h3>{{ $bk['deskripsi_pendek'] }}<h3></td>
                  </tr>
                  <tr>
                    <td><a><button class="btn btn-success">See More</button></a>
                  </tr>
                </table>
              </div>
  						</div>
  					</div>

          <?php endforeach; ?>


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

    </div>
@endsection

@section('script')
  @parent
<script src="{{asset('js/pages2/buku.js')}}"></script>
<script src="{{asset('js/pages2/modernizr.custom.js')}}"></script>
<script src="{{asset('js/pages2/jquerypp.custom.js')}}"></script>
<script src="{{asset('js/pages2/jquery.bookblock.js')}}"></script>
<script>Page.init();</script>
@endsection
