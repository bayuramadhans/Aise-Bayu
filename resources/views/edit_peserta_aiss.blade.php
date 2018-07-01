@extends('layout.headerfooter')
@section('title')
Edit Peserta Aiss
@endsection
@section('link')
<link rel="stylesheet" href="/css/login_detailform_registeralpro.css">
@endsection
@section('content')
<div class="container">
    <div class="row main">
        <div class="main-login main-center">
            <h5 class="ttitle">Edit Peserta Aiss</h5>
            <form class="" method="post" enctype="multipart/form-data" action="{{ url('/aiss/edit') . '/' . $pesertaAiss->token . '?email=' . $pesertaAiss->email }}">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                    <label for="nama" class="cols-sm-2 control-label">Nama Lengkap</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control" value="{{ $pesertaAiss->nama_lengkap }}" required name="nama" id="nama" placeholder="Masukkan Nama Lengkap" />
                        </div>
                    </div>
                </div>
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="cols-sm-2 control-label">Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <input type="email" class="form-control" value="{{ $pesertaAiss->email }}" required name="email" id="email" placeholder="Masukkan Email" />
                        </div>
                    </div>
                </div>
                <div class="form-group {{ $errors->has('no_telp') ? ' has-error' : '' }}">
                    <label for="no_telp" class="cols-sm-2 control-label">No. Telp</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <input type="number" class="form-control" value="{{ $pesertaAiss->no_telp }}" required name="no_telp" id="no_telp" placeholder="Masukkan No Telp" />
                        </div>
                    </div>
                </div>
                <div class="form-group {{ $errors->has('institusi') ? ' has-error' : '' }}">
                    <label for="institusi" class="cols-sm-2 control-label">Asal Institusi</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control" value="{{ $pesertaAiss->asal_institusi }}" required name="institusi" id="institusi" placeholder="Masukkan Asal Institusi" />
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col-md-6">
                        <img src="{{ url('aiss/bukti') . '/' . $pesertaAiss->token . '?email=' . $pesertaAiss->email }}" class="img-fluid img-thumbnail img-bukti" alt="">
                    </div>
                </div>
                <div class="form-group {{ $errors->has('bukti_pembayaran') ? ' has-error' : '' }}">
                    <label for="bukti_pembayaran" style="margin-top: 20px" class="cols-sm-2 control-label">Bukti Pembayaran baru</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <input id="bukti_pembayaran" name="bukti_pembayaran" type="file" class="form-control">
                        </div>
                    </div>
                </div>
                @if($errors->has('email'))
                <span class="text-danger msg">
                    *{{ $errors->first('email') }}
                </span> @elseif ($errors->has('nama'))
                <span class="text-danger msg">
                    *{{ $errors->first('nama') }}
                </span>
                @elseif($errors->has('no_telp'))
                <span class="text-danger msg">
                    *{{ $errors->first('no_telp') }}
                </span>
                @elseif ($errors->has('institusi'))
                <span class="text-danger msg">
                    *{{ $errors->first('institusi') }}
                </span>
                @elseif ($errors->has('bukti_pembayaran'))
                <span class="text-danger msg">
                    *{{ $errors->first('bukti_pembayaran') }}
                </span>
                @endif
                @include('flash::message')
                <div>
                    <button type="submit" id="button" class="btn btn-success btn-block">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
