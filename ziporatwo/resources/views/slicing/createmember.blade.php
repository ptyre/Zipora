@extends('path.index')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <a href="{{ route('admin.newmember') }}"><i class="material-icons">keyboard_backspace</i></a>
                        <div class="header text-center">
                            <h2>
                                Input New Member
                            </h2>
                        </div>
                        <form method="POST" action="{{ route('admin.createmember') }}">
                        {{ csrf_field() }}
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <b>Name</b>
                                            <div class="form-line">
                                                <input type="text" name="_name" class="form-control" placeholder="Member Name" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Email</b>
                                            <div class="form-line">
                                                <input type="email" name="_email" class="form-control" placeholder="Email" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Handphone</b>
                                            <div class="form-line">
                                                <input type="text" name="_telp" class="form-control" placeholder="Handphone" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Institusi</b>
                                            <div class="form-line">
                                                <input type="text" name="_institusi" class="form-control" placeholder="Institusi" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Address</b>
                                            <div class="form-line">
                                                <textarea rows="1" name="_alamat" class="form-control no-resize auto-growth" placeholder="Address"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Date</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">date_range</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="date" name="_tgl_masuk" id="tahun" data-date-format="YYYY/MM/DD" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Class</b>
                                            <select class="form-control show-tick" name="_id_class" >
                                                @foreach($class as $c)
                                                    <option value="{{ $c['id_class'] }}">{{ $c['name_class'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <button type="submit" class="btn bg-green waves-effect col-sm-12">
                                                <i class="material-icons">people</i>
                                                <span>INSERT NEW MEMBER</span>
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