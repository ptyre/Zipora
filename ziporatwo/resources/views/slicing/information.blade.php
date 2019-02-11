@extends('path.index')
@section('content')
	<section class="content">
        @if(Session::has('message'))
        <p class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>{{ Session::get('message') }}
        </p>
        @endif
        <div class="card">
            <div class="header">
                <h2>
                    INFORMATION
                    <small>Class Information</small>
                </h2>
                <ul class="header-dropdown m-r--5"><a href="{{ route('admin.createi') }}"><button type="button" class="btn btn-info waves-effect">New Infomation</button></a>
                    <li class="dropdown" hidden="true">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th hidden>id</th>
                            <th>TITLE</th>
                            <th>TYPE</th>
                            <th>DATE</th>
                            <th>INFORMATION</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($info)): ?>
                            @foreach($info as $c)
                            <tr>
                                <td hidden>{{ $c['id'] }}</td>
                                <td>{{ $c['judul'] }}</td>
                                <td>{{ $c['jenisinformasi'] }}</td>
                                <td>{{ $c['tgl'] }}</td>
                                <td>{{ $c['informasi'] }}</td>
                                <td><a href="{{  route('edit.info', $c['id']) }}" >
                                    <button type="button" class="btn btn-primary waves-effect">
                                        <i class="material-icons">settings</i></button></a>
                                    <form method="POST" action="{{ route('delete.info') }}">
                                    {{ csrf_field() }}
                                        <input type="hidden" name="_id" value="{{ $c['id'] }}"><button type="submit" class="btn btn-danger waves-effect"><i class="material-icons">report</i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        <?php endif ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
