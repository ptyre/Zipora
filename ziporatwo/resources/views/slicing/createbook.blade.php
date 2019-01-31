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
                        <form method="POST" action="{{ route('admin.createbook') }}">
                        {{ csrf_field() }}
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <b>Book Code</b>
                                            <div class="form-line">
                                                <input type="text" name="name_class" class="form-control" placeholder="Book Code" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Judul</b>
                                            <div class="form-line">
                                                <input type="text" name="name_class" class="form-control" placeholder="Judul" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Pengarang</b>
                                            <div class="form-line">
                                                <input type="text" name="name_class" class="form-control" placeholder="Pengarang" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Penerbit</b>
                                            <div class="form-line">
                                                <input type="text" name="name_class" class="form-control" placeholder="Penerbit" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>City</b>
                                            <div class="form-line">
                                                <input type="text" name="name_class" class="form-control" placeholder="Kota" required />
                                            </div>
                                        </div>
                                        <!-- Input Tahun Disini -->
                                        <div class="form-group">
                                            <b>Small Description</b>
                                            <div class="form-line">
                                                <textarea rows="1" class="form-control no-resize auto-growth" placeholder="Input Small Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Description</b>
                                            <div class="form-line">
                                                <textarea rows="3" class="form-control no-resize auto-growth" placeholder="
                                                Input Full Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="imageInput">Choose Photo</label>
                                            <input data-preview="#preview" name="input_img" type="file" accept="image/*" id="imageInput">
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