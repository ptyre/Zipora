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
                                Edit Member
                            </h2>
                        </div>
                        <form method="POST" action="{{ route('update.member') }}">
                        {{ csrf_field() }}
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        @foreach ($json as $a)
                                        <div class="form-group">
                                            <b>Name</b>
                                            <div class="form-line">
                                                <input type="hidden" name="_id_member" value="{{ $a->id_member }}">
                                                <input type="text" name="_name" class="form-control" value="{{ $a->name }}" maxlength="45" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Email</b>
                                            <div class="form-line">
                                                <input type="email" name="_email" class="form-control" value="{{ $a->email }}" maxlength="29" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Handphone</b>
                                            <div class="form-line">
                                                <input type="text" name="_telp" class="form-control" value="{{ $a->telp }}" maxlength="15" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Institusi</b>
                                            <div class="form-line">
                                                <input type="text" name="_institusi" class="form-control" value="{{ $a->institusi }}" maxlength="45" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Address</b>
                                            <div class="form-line">
                                                <textarea rows="1" name="_alamat" class="form-control no-resize auto-growth">{{ $a->alamat }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Date</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">date_range</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="date" name="_tgl_masuk" id="tahun" value="{{ $a->tgl_masuk }}" data-date-format="YYYY/MM/DD" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                        @endforeach
                                        <div class="form-group">
                                            <button type="submit" class="btn bg-green waves-effect col-sm-12">
                                                <i class="material-icons">people</i>
                                                <span>UPDATE MEMBER</span>
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