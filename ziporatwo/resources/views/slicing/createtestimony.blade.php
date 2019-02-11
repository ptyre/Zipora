@extends('path.index')
@section('content')
	<section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Input New Testimony
                            </h2>
                        </div>
                        <form method="POST" enctype="multipart/form-data" action="{{ route('create.newtestimony') }}">
            			{{ csrf_field() }}
		                    <div class="body">
		                        <div class="row clearfix">
		                            <div class="col-sm-12">
		                                <div class="form-group">
                                            <label for="imageInput">Name</label>
                                            <div class="form-line">
                                                <input type="text" name="_nama" class="form-control" placeholder="Name ..." required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="imageInput">Comment</label>
                                            <div class="form-line">
                                                <input type="text" name="_text" class="form-control" placeholder="Comment ..." required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="imageInput">Choose Photo</label>
                                            <div class="form-line">
                                                <input data-preview="#preview" name="_picture" type="file" accept="image/*" id="imageInput">
                                                <img class="col-sm-6" id="preview"  src="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn bg-green waves-effect col-sm-12">
                                                <i class="material-icons">insert_photo</i>
                                                <span>INSERT TESTIMONY</span>
                                            </button>
                                        </div>
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