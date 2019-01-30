@extends('path.index')
@section('content')
	<section class="content">
		<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TABS WITH CUSTOM ANIMATIONS
                                <small>You can use different animation class. We used Animation.css which link is <a href="https://daneden.github.io/animate.css/" target="_blank">https://daneden.github.io/animate.css/</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                        <li role="presentation" class="active"><a href="#home_animation_1" data-toggle="tab">HOME</a></li>
                                        <li role="presentation"><a href="#profile_animation_1" data-toggle="tab">PROFILE</a></li>
                                        <li role="presentation"><a href="#messages_animation_1" data-toggle="tab">MESSAGES</a></li>
                                        <li role="presentation"><a href="#settings_animation_1" data-toggle="tab">SETTINGS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane animated flipInX active" id="home_animation_1">
                                            <b>Home Content</b>
                                            <p>
                                                Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                                aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                                gubergren sadipscing mel.
                                            </p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane animated flipInX" id="profile_animation_1">
                                            <b>Profile Content</b>
                                            <p>
                                                Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                                aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                                gubergren sadipscing mel.
                                            </p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane animated flipInX" id="messages_animation_1">
                                            <b>Message Content</b>
                                            <p>
                                                Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                                aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                                gubergren sadipscing mel.
                                            </p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane animated flipInX" id="settings_animation_1">
                                            <b>Settings Content</b>
                                            <p>
                                                Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent
                                                aliquid pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere
                                                gubergren sadipscing mel.
                                            </p>
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