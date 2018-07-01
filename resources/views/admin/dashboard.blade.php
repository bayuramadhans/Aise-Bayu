@extends('admin.layout.headerfooter')

@section('content')
<div class="block-header">
    <h2>DASHBOARD</h2>
</div>

<!-- Widgets -->
<div class="row clearfix">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-light-green hover-expand-effect">
            <div class="icon">
                <i class="material-icons">group</i>
            </div>
            <div class="content">
                <div class="text">Jumlah Team Alpro</div>
                <div class="number count-to" data-from="0" data-to="{{ $team }}" data-speed="100" data-fresh-interval="10"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-light-green hover-expand-effect">
            <div class="icon">
                <i class="material-icons">group</i>
            </div>
            <div class="content">
                <div class="text">Verifed Team Alpro</div>
                <div class="number count-to" data-from="0" data-to="{{ $teamVerifed }}" data-speed="100" data-fresh-interval="10"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-orange hover-expand-effect">
            <div class="icon">
                <i class="material-icons">person</i>
            </div>
            <div class="content">
                <div class="text">Jumlah Peserta AISS</div>
                <div class="number count-to" data-from="0" data-to="{{ $pesertaAiss }}" data-speed="100" data-fresh-interval="10"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-orange hover-expand-effect">
            <div class="icon">
                <i class="material-icons">person</i>
            </div>
            <div class="content">
                <div class="text">Verifed Peserta AISS</div>
                <div class="number count-to" data-from="0" data-to="{{ $pesertaAissVerifed }}" data-speed="100" data-fresh-interval="10"></div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Widgets -->
<!-- CPU Usage -->
<div class="row clearfix">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-6">
                        <h1>*CATATAN UNTUK ADMIN:</h1>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
@endsection
