@extends('path.index')
@section('content')
	<section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Input New Type
                            </h2>
                        </div>
                        <form method="POST" action="{{ route('create.type') }}">
            			{{ csrf_field() }}
		                    <div class="body">
		                        <div class="row clearfix">
		                            <div class="col-sm-12">
		                                <div class="form-group">
		                                    <div class="form-line">
		                                        <input type="text" name="_nama_jenis" class="form-control" maxlength="48" placeholder="Inset new Type here.." required />
		                                    </div>
		                                </div>
		                                <div class="form-group">
		                                	<button type="submit" class="btn bg-lime waves-effect col-sm-12">
				                                <i class="material-icons">book</i>
				                                <span>INSERT NEW TYPE</span>
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