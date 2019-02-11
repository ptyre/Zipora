<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Ziporatwo</title>
    <!-- Favicon-->
    <link href="{{asset('images/zipora.ico')}}" rel="shortcut icon" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Select Css -->
    <link href="{{asset('plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    @include('path.header')
    
    @include('path.menu')

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <a href="{{ route('admin.info') }}"><i class="material-icons">keyboard_backspace</i></a>
                        <div class="header text-center">
                            <h2>
                                Input New Information
                            </h2>
                        </div>
                        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.newinfo') }}">
                        {{ csrf_field() }}
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <b>Judul Informasi</b>
                                            <div class="form-line">
                                                <input type="text" name="_judul" class="form-control" placeholder="Judul Informasi ...." required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Date</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">date_range</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="date" name="_tgl" id="tahun" data-date-format="YYYY/MM/DD" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <b>Combobox</b>
                                            <select class="form-control show-tick" name="_id_jenisinfo">
                                                @foreach($jenis as $j)
                                                    <option value="{{ $j['id'] }}">{{ $j['jenisinformasi'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="imageInput">Choose Photo</label>
                                            <input name="_picture" type="file" id="_picture" accept="image/*">
                                            <img class="col-sm-6" id="preview"  src="">
                                        </div>
                                        <div class="form-group">
                                            <b>About That</b>
                                                <textarea id="ckeditor" name="_informasi">
                                                    <h2>WYSIWYG Editor</h2>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.</p>
                                                    <h3>Lacinia</h3>
                                                    <ul>
                                                        <li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
                                                        <li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
                                                        <li>Praesent non lacinia mi.</li>
                                                        <li>Mauris a ante neque.</li>
                                                        <li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
                                                    </ul>
                                                    <h3>Pellentesque adipiscing</h3>
                                                    <p>Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.</p>
                                                </textarea>
                                            </div>
                                            <div class="form-group">
                                            <button type="submit" class="btn bg-green waves-effect col-sm-12">
                                                <i class="material-icons">info</i>
                                                <span>INSERT NEW INFORMATION</span>
                                            </button>
                                        </div>
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

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Ckeditor -->
    <script src="../../plugins/ckeditor/ckeditor.js"></script>

    <!-- TinyMCE -->
    <script src="../../plugins/tinymce/tinymce.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/editors.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>