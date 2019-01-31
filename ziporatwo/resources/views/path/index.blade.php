<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Ziporatwo</title>
    <link href="{{asset('images/zipora.ico')}}" rel="shortcut icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/node-waves/waves.css')}}" rel="stylesheet" />
    <link href="{{asset('plugins/animate-css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('plugins/morrisjs/morris.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/themes/all-themes.css')}}" rel="stylesheet" />
</head>

<body class="theme-red">
    @include('path.header')
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('images/user.png')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opang</div>
                    <div class="email">naufaldwimln@gmail.com</div>
                </div>
            </div>
            <!-- Menu -->
            @include('path.menu')
            <!-- #Footer -->
        </aside>
    </section>
    
    @yield('content')         
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
    <script src="{{asset('plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('plugins/node-waves/waves.js')}}"></script>
    <script src="{{asset('plugins/jquery-countto/jquery.countTo.js')}}"></script>
    <script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('plugins/morrisjs/morris.js')}}"></script>
    <script src="{{asset('plugins/chartjs/Chart.bundle.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.time.js')}}"></script>
    <script src="{{asset('plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>
    <script src="{{asset('js/admin.js')}}"></script>
    <script src="{{asset('js/pages/forms/basic-form-elements.js')}}"></script>
    <script src="{{asset('js/pages/index.js')}}"></script>
    <script src="{{asset('js/demo.js')}}"></script>
    @yield('script')
</body>

</html>
