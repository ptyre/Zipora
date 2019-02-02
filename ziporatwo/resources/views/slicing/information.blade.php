@extends('path.index')
@section('content')
	<section class="content">
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
                            <th>#</th>
                            <th>FIRST NAME</th>
                            <th>LAST NAME</th>
                            <th>USERNAME</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection