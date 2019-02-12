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
                    BOOK
                    <small>Class Book</small>
                </h2>
                <ul class="header-dropdown m-r--5"><a href="{{ route('admin.newbook') }}"><button type="button" class="btn btn-info waves-effect">New Book</button></a>
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
                            <th>#</th>
                            <th>TITLE</th>
                            <th>AUTHOR</th>
                            <th>PUBLISHER</th>
                            <th>CITY</th>
                            <th>YEAR</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($book)): ?>
                            @foreach($book as $b)
                            <tr>
                                <td>{{ $b['id_buku'] }}</td>
                                <td id="trimname">{{ $b['judul_buku'] }}</td>
                                <td>{{ $b['pengarang'] }}</td>
                                <td>{{ $b['penerbit'] }}</td>
                                <td>{{ $b['kota'] }}</td>
                                <td>{{ $b['tahun'] }}</td>
                                <td><a href="{{  route('edit.book', $b['id_buku']) }}" >
                                    <button type="button" class="btn btn-primary waves-effect">
                                        <i class="material-icons">settings</i></button></a>
                                    <form method="POST" action="{{ route('delete.book') }}">
                                    {{ csrf_field() }}
                                        <input type="hidden" name="_id_buku" value="{{ $b['id_buku'] }}"><button type="submit" class="btn btn-danger waves-effect"><i class="material-icons">report</i></button>
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