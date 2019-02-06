@extends('path.index')
@section('content')
	<section class="content">
        @if(Session::has('message'))
        <p class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>{{ Session::get('message') }}
        </p>
        @endif
		<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Gallery Photo
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{ route('gallery.createg') }}" class=" waves-effect waves-block">Insert New Photo</a></li>
                                        <li><a href="{{ route('gallery.createt') }}" class=" waves-effect waves-block">Insert New Type</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                        <li role="presentation" class="active"><a href="#home_animation_1" data-toggle="tab">DATA</a></li>
                                        <li role="presentation"><a href="#profile_animation_1" data-toggle="tab">PHOTO</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane animated flipInX active" id="home_animation_1">
                                            <b>DataData</b>
                                            <p>
                                                <div class="body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                            <thead>
                                                                <tr>
                                                                    <th hidden>id</th>
                                                                    <th>Picture</th>
                                                                    <th>Information</th>
                                                                    <th>Date</th>
                                                                    <th>Type</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php if (!empty($gallery)): ?>
                                                                @foreach($gallery as $g)
                                                                <tr>
                                                                    <td hidden>{{ $g['id'] }}</td>
                                                                    <td>{{ $g['pict'] }}</td>
                                                                    <td>{{ $g['info'] }}</td>
                                                                    <td>{{ $g['tgl'] }}</td>
                                                                    <td>{{ $g['nama_jenis'] }}</td>
                                                                    <td><form method="POST" action="{{ route('delete.gallery') }}">
                                                                    {{ csrf_field() }}
                                                                        <input type="hidden" name="_id" value="{{ $g['id'] }}"><button type="submit" class="btn btn-danger waves-effect"><i class="material-icons">report</i></button>
                                                                    </form></td>
                                                                </tr>
                                                                @endforeach
                                                            <?php endif ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane animated flipInX" id="profile_animation_1">
                                            <b>Photo</b>
                                            <p>
                                                <div class="body">
                                                    <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                                        <?php if (!empty($gallery)): ?>
                                                            @foreach($gallery as $g)
                                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                <a href="{{ $g['pict'] }}" data-sub-html="Demo Description">
                                                                    <img class="img-responsive thumbnail" src="{{ $g['pict'] }}">
                                                                </a>
                                                            </div>
                                                            @endforeach
                                                        <?php endif ?>
                                                    </div>
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	</section>
@endsection