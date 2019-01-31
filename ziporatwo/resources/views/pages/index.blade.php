@extends('pages.master', ['title' => 'Buku'])


@section('css')
<link href="{{asset('css/pages/index.css')}}" rel="stylesheet">
@endsection

@section('header')

@endsection

@section('content')
<div class=container>

    </div>
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

@endsection

@push('script')

<script src="{{asset('js/pages2/pilihan.js')}}"></script>
<script src="{{asset('js/pages2/page1.js')}}"></script>
@endpush
