@extends('path.index')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <a href="{{ route('admin.book') }}"><i class="material-icons">keyboard_backspace</i></a>
                        <div class="header text-center">
                            <h2>
                                Input New Book
                            </h2>
                        </div>
                        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.createbook') }}">
                        {{ csrf_field() }}
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <b>Book Code</b>
                                            <div class="form-line">
                                                <input type="text" name="_id_buku" class="form-control" placeholder="Book Code" maxlength="5" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Title</b>
                                            <div class="form-line">
                                                <input type="text" name="_judul_buku" class="form-control" placeholder="Title here.." required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Author</b>
                                            <div class="form-line">
                                                <input type="text" name="_pengarang" class="form-control" maxlength="45" placeholder="Author here.." required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Publisher</b>
                                            <div class="form-line">
                                                <input type="text" name="_penerbit" class="form-control" maxlength="25" placeholder="Publisher here.." required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>City</b>
                                            <div class="form-line">
                                                <input type="text" name="_kota" class="form-control" maxlength="29" placeholder="City here.." required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Year</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">date_range</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="date" name="_tahun" id="tahun" data-date-format="YYYY/MM/DD" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Small Description</b>
                                            <div class="form-line">
                                                <textarea rows="1" name="_deskripsi_pendek" class="form-control no-resize auto-growth" placeholder="Input Small Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Description</b>
                                            <div class="form-line">
                                                <textarea rows="3" name="_deskripsi" class="form-control no-resize auto-growth" placeholder="
                                                Input Full Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="imageInput">Choose Photo</label>
                                            <input data-preview="#preview" name="_picture" type="file" accept="image/*" id="imageInput" required>
                                            <img class="col-sm-6" id="preview"  src="">
                                        </div>
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