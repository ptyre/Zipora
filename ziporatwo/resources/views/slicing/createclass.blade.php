@extends('path.index')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <a href="{{ route('admin.class') }}"><i class="material-icons">keyboard_backspace</i></a>
                        <div class="header text-center">
                            <h2>
                                Input New Class
                            </h2>
                            
                        </div>
                        <form method="POST" action="{{ route('create.newclass') }}">
                        {{ csrf_field() }}
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="name_class" class="form-control" placeholder="Class Name" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn bg-green waves-effect col-sm-12">
                                                <i class="material-icons">class</i>
                                                <span>INSERT NEW CLASS</span>
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