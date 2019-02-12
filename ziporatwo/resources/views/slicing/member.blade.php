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
                    MEMBER
                    <small>Class Member</small>
                </h2>
                <ul class="header-dropdown m-r--5"><a href="{{ route('admin.newmember') }}"><button type="button" class="btn btn-info waves-effect">New Member</button></a>
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
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>HANDPHONE</th>
                            <th>CLASS</th>
                            <th>DATE</th>
                            <th>INSTITUT</th>
                            <th>ADDRESS</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($member)): ?>
                            @foreach($member as $m)
                            <tr>
                                <td hidden>{{ $m['id_member'] }}</td>
                                <td id="namamember">{{ $m['name'] }}</td>
                                <td>{{ $m['telp'] }}</td>
                                <td>{{ $m['email'] }}</td>
                                <td>{{ $m['name_class'] }}</td>
                                <td>{{ $m['tgl_masuk'] }}</td>
                                <td>{{ $m['institusi'] }}</td>
                                <td id="alamatmember">{{ $m['alamat'] }}</td>
                                <td><a href="{{ route('edit.member', $m['id_member']) }}" >
                                    <button type="button" class="btn btn-primary waves-effect">
                                        <i class="material-icons">settings</i></button></a>
                                    <form method="POST" action="{{ route('delete.member') }}">
                                    {{ csrf_field() }}
                                        <input type="hidden" name="_id_member" value="{{ $m['id_member'] }}"><button type="submit" class="btn btn-danger waves-effect"><i class="material-icons">report</i></button>
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