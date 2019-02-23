@extends('path.index')
@section('content')
	<section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Input New Photo
                            </h2>
                        </div>
                        <form method="POST" enctype="multipart/form-data" action="{{ route('create.photo') }}">
            			{{ csrf_field() }}
		                    <div class="body">
		                        <div class="row clearfix">
		                            <div class="col-sm-12">
                                        @if(!empty($jenis))
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="_info" class="form-control" placeholder="Information" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Type Photo</b>
                                            <select class="form-control show-tick" name="_jenis">
                                                @foreach($jenis as $j)
                                                    <option value="{{ $j['id_jenisgalery'] }}">{{ $j['nama_jenis'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <b>Date Time</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">date_range</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="date" name="_tgl" id="tahun" data-date-format="YYYY/MM/DD" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="imageInput">Choose Photo</label>
                                                <input data-preview="#preview" name="_picture" type="file" accept="image/*" id="imageInput" required>
                                                <img class="col-sm-6" id="preview"  src="">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn bg-green waves-effect col-sm-12">
                                                    <i class="material-icons">insert_photo</i>
                                                    <span>INSERT PHOTO</span>
                                                </button>
                                            </div>
                                        @else
                                        <div class="form-group">
                                            <label>Isi Jenis/Type Gallery terlebih dulu</label>
                                            </div>
                                        @endif
		                            </div>
		                        </div>
		                    </div>
                    	</form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection