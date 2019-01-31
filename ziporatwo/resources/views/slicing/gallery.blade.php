@extends('path.index')
@section('content')
	<section class="content">
		<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Gallery Photo
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                        <li role="presentation" class="active"><a href="#home_animation_1" data-toggle="tab">DATA</a></li>
                                        <li role="presentation"><a href="#profile_animation_1" data-toggle="tab">PHOTO</a></li>
                                        <li role="presentation"><a href="#messages_animation_1" data-toggle="tab">INSERT</a></li>
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
                                                                    <th>Name</th>
                                                                    <th>Position</th>
                                                                    <th>Office</th>
                                                                    <th>Age</th>
                                                                    <th>Start date</th>
                                                                    <th>Salary</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Jonas Alexander</td>
                                                                    <td>Developer</td>
                                                                    <td>San Francisco</td>
                                                                    <td>30</td>
                                                                    <td>2010/07/14</td>
                                                                    <td>$86,500</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Shad Decker</td>
                                                                    <td>Regional Director</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>51</td>
                                                                    <td>2008/11/13</td>
                                                                    <td>$183,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Michael Bruce</td>
                                                                    <td>Javascript Developer</td>
                                                                    <td>Singapore</td>
                                                                    <td>29</td>
                                                                    <td>2011/06/27</td>
                                                                    <td>$183,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Donna Snider</td>
                                                                    <td>Customer Support</td>
                                                                    <td>New York</td>
                                                                    <td>27</td>
                                                                    <td>2011/01/25</td>
                                                                    <td>$112,000</td>
                                                                </tr>
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
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                            <a href="../../images/image-gallery/1.jpg" data-sub-html="Demo Description">
                                                                <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-1.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                            <a href="../../images/image-gallery/12.jpg" data-sub-html="Demo Description">
                                                                <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-12.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                            <a href="../../images/image-gallery/13.jpg" data-sub-html="Demo Description">
                                                                <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-13.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                            <a href="../../images/image-gallery/14.jpg" data-sub-html="Demo Description">
                                                                <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-14.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                            <a href="../../images/image-gallery/15.jpg" data-sub-html="Demo Description">
                                                                <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-15.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                            <a href="../../images/image-gallery/16.jpg" data-sub-html="Demo Description">
                                                                <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-16.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                            <a href="../../images/image-gallery/17.jpg" data-sub-html="Demo Description">
                                                                <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-17.jpg">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane animated flipInX" id="messages_animation_1">
                                            <form method="POST" action="">
                                            {{ csrf_field() }}
                                                <p>
                                                    <b>Information</b>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" name="name_class" class="form-control" placeholder="Information" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <b>Date Time</b>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">date_range</i>
                                                            </span>
                                                            <div class="form-line">
                                                                <input type="text" class="form-control datetime" placeholder="Ex: 30/07/2016 23:59">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="imageInput">File input</label>
                                                            <input data-preview="#preview" name="input_img" type="file" id="imageInput">
                                                            <img class="col-sm-6" id="preview"  src="">
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn bg-green waves-effect col-sm-12">
                                                                <i class="material-icons">insert_photo</i>
                                                                <span>INSERT PHOTO</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </p>
                                            </form>
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