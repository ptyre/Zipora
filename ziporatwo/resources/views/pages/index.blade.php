@extends('pages.master', ['title' => 'Buku'])


@section('css')
<link href="{{asset('css/pages/index.css')}}" rel="stylesheet">
@endsection

@section('header')

@endsection

@section('content')
<div class = "pilih menu">
		<div class="diamond thumb intend">1</div>
		<div class="diamond thumb dark">2</div>
		<div class="diamond thumb break">3</div>
		<div class="diamond">4</div>
		<div class="diamond thumb dark">5</div>
		<div class="diamond thumb intend">6</div>
		<div class="diamond thumb dark">6</div>


	</div>
@endsection

@section('script')
<link href="{{asset('js/pages2/pilihan.js')}}" rel="script">
<link href="{{asset('js/pages2/index.js')}}" rel="script">
@endsection
