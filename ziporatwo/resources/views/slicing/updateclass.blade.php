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
                                Update New Class
                            </h2>
                        </div>
                        <form method="POST" action="{{ route('update.class') }}">
                        {{ csrf_field() }}
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        @foreach ($json as $class)
                                        <div class="form-group">
                                            <b>Class Name</b>
                                            <div class="form-line">
                                                <input type="hidden" name="_id_class" value="{{ $class->id_class}}" class="form-control" required />
                                                <input type="text" name="_name_class" value="{{ $class->name_class}}" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Deskripsi</b>
                                            <div class="form-line">
                                                <input type="text" name="_deskripsi" value="{{ $class->deskripsi}}" class="form-control" required />
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="form-group">
                                            <button type="submit" class="btn bg-primary waves-effect col-sm-12">
                                                <i class="material-icons">class</i>
                                                <span>UPDATE CLASS</span>
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