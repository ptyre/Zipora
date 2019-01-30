@extends('path.index')
@section('content')
	<section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Input New Admin
                            </h2>
                        </div>
                        <form method="POST" action="{{ route('create.newadmin') }}">
            			{{ csrf_field() }}
		                    <div class="body">
		                        <div class="row clearfix">
		                            <div class="col-sm-12">
		                                <div class="form-group">
		                                    <div class="form-line">
		                                        <input type="text" name="nama" class="form-control" placeholder="Name" required />
		                                    </div>
		                                </div>
		                                <div class="form-group">
		                                    <div class="form-line">
		                                        <input type="text" name="username" class="form-control" placeholder="Username" required />
		                                    </div>
		                                </div>
		                                <div class="form-group">
		                                    <div class="form-line">
		                                        <input type="password" name="password" class="form-control" placeholder="Password" required/>
		                                    </div>
		                                </div>
		                                <div class="form-group">
		                                    <div class="form-line">
		                                        <input type="password" name="" class="form-control" placeholder="Confirm Password" required/>
		                                    </div>
		                                </div>
		                                <div class="form-group">
		                                	<button type="submit" class="btn bg-lime waves-effect col-sm-12">
				                                <i class="material-icons">vpn_key</i>
				                                <span>INSERT NEW ADMIN</span>
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