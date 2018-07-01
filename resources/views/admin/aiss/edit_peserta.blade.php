@extends('admin.layout.headerfooter')
@section('link')
<link rel="stylesheet" href="{{ url('css/admin-aiss.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Peserta Aiss</div>
                @include('flash::message')
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ url('/admin/aiss/peserta/edit/') . '/' . $pesertaAiss->id }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama Lengkap</label>
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ $pesertaAiss->nama_lengkap }}" required>
                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $pesertaAiss->email }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('no_telp') ? ' has-error' : '' }}">
                            <label for="no_telp" class="col-md-4 control-label">No. Telp</label>
                            <div class="col-md-6">
                                <input id="no_telp" type="number" class="form-control" name="no_telp" value="{{ $pesertaAiss->no_telp }}" required>
                                @if ($errors->has('no_telp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('no_telp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('institusi') ? ' has-error' : '' }}">
                            <label for="institusi" class="col-md-4 control-label">Asal Institusi</label>
                            <div class="col-md-6">
                                <input id="institusi" type="text" class="form-control" name="institusi" value="{{ $pesertaAiss->asal_institusi }}" required>
                                @if ($errors->has('institusi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('institusi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('bukti_pembayaran') ? ' has-error' : '' }}">
                            <img src="{{ url('/admin/aiss/bukti') . '/' . $pesertaAiss->id }}" class="img-fluid img-thumbnail img-bukti" alt="">
                            <div class="" style="margin-top: 30px">
                                <label for="bukti_pembayaran" class="col-md-4 control-label">Bukti Pembayaran Baru</label>
                            </div>
                            <div class="col-md-6">
                                <input id="bukti_pembayaran" name="bukti_pembayaran" type="file" class="form-control-file">
                                @if ($errors->has('bukti_pembayaran'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bukti_pembayaran') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: 20px">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
