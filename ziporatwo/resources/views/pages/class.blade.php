@extends('pages.master', ['title' => 'Gallery'])

@section('css')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="{{asset('css/pages/class.css')}}" rel="stylesheet">
@endsection



@section('content')
<section id="kelas">
<div class="judul-class">

</div>
    <div class="mybros">
    <div class="kolum" style="background-color:orange;">
      <div class="gambar">
        <div class="card2">

          <div class="products">

            <?php foreach ($data as $cl): ?>
            <div class="product active" product-id="{{ $cl['id_class'] }}" product-color="orange">
              <h1 class="title">{{ $cl['name_class'] }}</h1>
              <p class="description">{{ $cl['deskripsi'] }}</p>
            </div>
            <?php endforeach; ?>

          </div>
          <div class="footer"><a class="btn" id="prev" href="#" ripple="" ripple-color="#666666">Prev</a><a class="btn" id="next" href="#" ripple="" ripple-color="#666666">Next</a></div>
        </div>

      </div>
    </div>

    <div class="kolum" style="background-color:orange;">

      <div class="container" id="kontainerForm">
    <div class="row">
		<form  role="form" class="col-md-9 go-right">

			<div class="form-group">
			     <input id="name" name="name" type="text" class="form-control" placeholder="Name"  required>
			<label for="name">Nama</label>
		  </div>

      <div class="form-group">
			     <input id="instutisi" name="instutisi" type="text" class="form-control" placeholder="Instutisi" required>
			<label for="instutisi">Instutisi</label>
		  </div>

      <div class="form-group">
        <select id="idclass" class="form-control" placeholder= "Class">
          <option selected>Class</option>
          <?php foreach ($data as $op): ?>
            <option value="{{ $op['id_class'] }}">{{ $op['name_class'] }}</option>
          <?php endforeach; ?>

        </select>
		  </div>

      <div class="form-group">
			     <input id="email" name="email" type="email" class="form-control" placeholder="E-mail" required>
			<label for="email">E-mail</label>
		  </div>

      <div class="form-group">
			     <input id="telepon" name="telepon" type="tel" class="form-control" placeholder="Phone Number" required>
			<label for="phone">Phone Number</label>
		  </div>

      <div class="form-group">
			<textarea id="alamat" name="alamat" type="textarea" class="form-control" placeholder="Adress" required></textarea>
			<label for="alamat">Alamat</label>
		  </div>
      {{ csrf_field() }}

      <a><button type="submit" class="btn btn-success">Send</button></a>
		</form>

	     </div>
     </div>
    </div>

  </div>
</div>

</section>
@endsection

@section('script')
<script src="{{asset('js/pages2/class.js')}}"></script>
@endsection
