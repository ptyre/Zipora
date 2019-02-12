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
                                Testimony
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{ route('create.testimony') }}" class=" waves-effect waves-block">Insert New Testimony</a></li>
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
                                                                    <th>Comment</th>
                                                                    <th>Picture</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php if (!empty($testimony)): ?>
                                                                @foreach($testimony as $t)
                                                                <tr>
                                                                    <td hidden>{{ $t['id'] }}</td>
                                                                    <td>{{ $t['nama'] }}</td>
                                                                    <td id="trimdeskripsi">{{ $t['text'] }}</td>
                                                                    <td>{{ $t['pict'] }}</td>
                                                                    <td><form method="POST" action="{{ route('delete.testimony') }}">
                                                                    {{ csrf_field() }}
                                                                        <input type="hidden" name="_id" value="{{ $t['id'] }}"><button type="submit" class="btn btn-danger waves-effect"><i class="material-icons">report</i></button>
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
                                                        <?php if (!empty($testimony)): ?>
                                                            @foreach($testimony as $t)
                                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                <a href="{{ $t['pict'] }}" data-sub-html="Demo Description">
                                                                    <img class="img-responsive thumbnail" src="{{ $t['pict'] }}">
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