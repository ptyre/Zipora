@extends('pages.master', ['title' => 'Home'])



@section('css')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="{{asset('css/pages/navigasi-atas.css')}}" rel="stylesheet">
<link href="{{asset('css/pages/buku.css')}}" rel="stylesheet">
@endsection

@section('navigasi')
@endsection

@section('content')
    <section class="home-slider js-fullheight owl-carousel">
			<?php foreach ($data['buku'] as $bk): ?>
				<div class="slider-item js-fullheight" style="background-image:url({{$bk['pict']}});">
					<div class="overlay"></div>
					<div class="container">
						<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
						<div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{$bk['judul_buku']}}</h1>
							<p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{$bk['deskripsi_pendek']}}</p>
							<p><a href="#" class="btn btn-white btn-outline-white px-4 py-3 mt-3">Read more</a></p>
						</div>
					</div>
					</div>
				</div>
			<?php endforeach; ?>



    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <h2 class="mb-4">Testimoni</h2>
            <p>testimoni orang orang</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
<?php foreach ($data['testimoni'] as $ts): ?>

	<div class="item">
		<div class="testimony-wrap p-4 pb-5">
			<div class="user-img mb-5" style="background-image: url({{$ts['pict']}})">
				<span class="quote d-flex align-items-center justify-content-center">
					<i class="icon-quote-left"></i>
				</span>
			</div>
			<div class="text">
				<p class="mb-5 pl-4 line">{{$ts['text']}}</p>
				<p class="name">{{$ts['nama']}}</p>
			</div>
		</div>
	</div>

<?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <form method="POST" action="#" role="form" class="col-md-9 go-right">

			<div class="form-group">
			     <input id="name" name="_name" type="text" class="form-control" placeholder="Name"  required>
			<label for="name">Nama</label>
		  </div>

      <div class="form-group">
			     <input id="instutisi" name="_instutisi" type="text" class="form-control" placeholder="Instutisi" required>
			<label for="instutisi">Instutisi</label>
		  </div>


      <div class="form-group">
			     <input id="email" name="_email" type="email" class="form-control" placeholder="E-mail" required>
			<label for="email">E-mail</label>
		  </div>

      <div class="form-group">
			     <input id="telepon" name="_telp" type="tel" class="form-control" placeholder="Phone Number" required>
			<label for="phone">Phone Number</label>
		  </div>

      <div class="form-group">
			<textarea id="alamat" name="_alamat" type="textarea" class="form-control" placeholder="Adress" required></textarea>
			<label for="alamat">Alamat</label>
		  </div>
      {{ csrf_field() }}
      <input type="hidden" name="_tgl_masuk" value="{{date("Y-m-d")}}"></input>

      <a><button type="submit" class="btn btn-success">Send</button></a>
		</form>
    <section>

    </section>
@endsection

@section('script')
  @parent

@endsection
