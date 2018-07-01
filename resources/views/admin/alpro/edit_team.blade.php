@extends('admin.layout.headerfooter')
@section('link')
<link rel="stylesheet" href="{{ url('css/admin-aiss.css') }}">
@endsection
@section('title')
Edit Participan Alpro
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Team Alpro</div>
                @include('flash::message')
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ url('/admin/alpro/team/edit') . '/' . $team->id_teams }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('nama_team') ? ' has-error' : '' }}">
                            <label for="nama_team" class="col-md-4 control-label">Nama Team</label>
                            <div class="col-md-6">
                                <input id="nama_team" type="text" class="form-control" name="nama_team" value="{{ $team->nama_team }}" required>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('kota') ? ' has-error' : '' }}">
                            <label for="kota" class="col-md-4 control-label">Kota</label>
                            <div class="col-md-6">
                                <input id="kota" type="text" class="form-control" name="kota" value="{{ $team->kota }}" required>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('asal_sekolah') ? ' has-error' : '' }}">
                            <label for="asal_sekolah" class="col-md-4 control-label">Asal Sekolah</label>
                            <div class="col-md-6">
                                <input id="asal_sekolah" type="text" class="form-control" name="asal_sekolah" value="{{ $team->asal_sekolah }}" required>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nama_pembina') ? ' has-error' : '' }}">
                            <label for="nama_pembina" class="col-md-4 control-label">Nama Pembina</label>
                            <div class="col-md-6">
                                <input id="nama_pembina" type="text" class="form-control" name="nama_pembina" value="{{ $team->nama_pembina }}">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('no_telp_pembina') ? ' has-error' : '' }}">
                            <label for="no_telp" class="col-md-4 control-label">No. Telp Pembina</label>
                            <div class="col-md-6">
                                <input id="no_telp" type="number" class="form-control" name="no_telp_pembina" value="{{ $team->no_telp_pembina }}">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('bukti_pembayaran') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <label for="bukti_pembayaran" style="padding-left: 0 !important; margin-top: 20px" class="col-md-12 col-lg-12 col-sm-12 control-label">Bukti Pembayaran baru</label>
                                <input id="bukti_pembayaran" name="bukti_pembayaran" type="file" class="form-control-file">
                            </div>
                        </div>
                        <div class="" style="margin: 20px 10px">
                            @if ($errors->has('nama_team'))
					            <span class="text-danger">
					                *{{ $errors->first('nama_team') }}
					            </span>
					        @elseif ($errors->has('kota'))
					            <span class="text-danger">
					                *{{ $errors->first('kota') }}
					            </span>
					        @elseif ($errors->has('asal_sekolah'))
					            <span class="text-danger">
					                *{{ $errors->first('asal_sekolah') }}
					            </span>
					        @elseif ($errors->has('nama_pembina'))
					            <span class="text-danger">
					                *{{ $errors->first('nama_pembina') }}
					            </span>
					        @elseif ($errors->has('no_telp_pembina'))
					            <span class="text-danger">
					                *{{ $errors->first('no_telp_pembina') }}
					            </span>
					        @elseif ($errors->has('bukti_pembayaran'))
					            <span class="text-danger">
					                *{{ $errors->first('bukti_pembayaran') }}
					            </span>
                            @endif
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
