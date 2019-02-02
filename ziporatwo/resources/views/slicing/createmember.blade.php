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
                                                <input type="text" name="name_class" class="form-control" placeholder="Member Name" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Email</b>
                                            <div class="form-line">
                                                <input type="text" name="name_class" class="form-control" placeholder="Email" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Institusi</b>
                                            <div class="form-line">
                                                <input type="text" name="name_class" class="form-control" placeholder="Institusi" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Date In</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">date_range</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="date" name="tahun" id="tahun" data-date-format="YYYY/MM/DD" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Combobox</b>
                                            <select class="form-control show-tick" >
                                                <option value="">-- Please select --</option>
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                                <option value="50">50</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <button type="submit" class="btn bg-green waves-effect col-sm-12">
                                                <i class="material-icons">book</i>
                                                <span>INSERT NEW BOOK</span>
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