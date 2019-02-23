@extends('path.index')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="block-header">
        <h2>DASHBOARD</h2>
    </div>

    <!-- Widgets -->
    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">fiber_new</i>
                </div>
                <div class="content">
                    <div class="text">INFORMATION</div>
                    <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">
                        <?php if (!empty($dasboard)): ?>
                            {{ count($dasboard['informasi']) }}
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">collections</i>
                </div>
                <div class="content">
                    <div class="text">PHOTO</div>
                    <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">
                        <?php if (!empty($dasboard)): ?>
                            {{ count($dasboard['gallery']) }}
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-light-green hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">forum</i>
                </div>
                <div class="content">
                    <div class="text">CLASS</div>
                    <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20">
                        <?php if (!empty($dasboard)): ?>
                            {{ count($dasboard['class']) }}
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-orange hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">person_add</i>
                </div>
                <div class="content">
                    <div class="text">MEMBER</div>
                    <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">
                        <?php if (!empty($dasboard)): ?>
                            {{ count($dasboard['member']) }}
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <!-- Visitors -->
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="body bg-pink">
                    <div class="m-b--35 font-bold">INFORMATION</div>
                    <ul class="dashboard-stat-list">
                        <?php if (!empty($dasboard)): ?>
                            @foreach ($dasboard['informasi'] as $i)
                            <li>
                                {{ $i['judul'] }}
                                <span class="pull-right"><small>{{ $i['tentang'] }}</small></span>
                            </li>
                            @endforeach
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="body bg-orange">
                    <div class="m-b--35 font-bold">NEW MEMBER</div>
                    <ul class="dashboard-stat-list">
                        <?php if (!empty($dasboard)): ?>
                            @foreach (array_slice($dasboard['member'], 0, 10) as $d)
                            <li>
                                {{ $d['name'] }}
                                <span class="pull-right"><b>{{ $d['telp'] }}</b> <small>{{ $d['tgl_masuk'] }}</small></span>
                            </li>
                            @endforeach
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #END# Visitors -->
        <!-- Latest Social Trends -->
    </div>
  </div>
</section>
@endsection