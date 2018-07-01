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
                <div class="panel-heading">Edit Participan Alpro</div>
                @include('flash::message')
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ url('/admin/alpro/participan/edit') . '/' . $participans->id }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama Lengkap</label>
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama_lengkap" value="{{ $participans->nama_lengkap }}" required>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
                            <label for="tempat_lahir" class="col-md-4 control-label">Tempat Lahir</label>
                            <div class="col-md-6">
                                <input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir" value="{{ $participans->tempat_lahir }}" required>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
                            <label for="tanggal_lahir" class="col-md-4 control-label">Tanggal Lahir</label>
                            <div class="col-md-6">
                                <input id="tanggal_lahir" type="date" class="form-control" name="tanggal_lahir" value="{{ $participans->tanggal_lahir }}" required>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>
                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ $participans->alamat }}" required>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('no_telp') ? ' has-error' : '' }}">
                            <label for="no_telp" class="col-md-4 control-label">No. Telp</label>
                            <div class="col-md-6">
                                <input id="no_telp" type="number" class="form-control" name="no_telp" value="{{ $participans->no_telp }}" required>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-sm-6 col-xs-6 col-lg-6 col-md-6">
                                <p>Pas Foto</p>
                            </div>
                            <div class="col-sm-6 col-xs-6 col-lg-6 col-md-6">
                                <p>Foto Ktp</p>
                            </div>
                        </div>
                        <div class="" style="margin: 0 10px">
                            @if ($errors->has('nama_lengkap'))
					            <span class="text-danger">
					                *{{ $errors->first('nama_lengkap') }}
					            </span>
					        @elseif ($errors->has('tempat_lahir'))
					            <span class="text-danger">
					                *{{ $errors->first('tempat_lahir') }}
					            </span>
					        @elseif ($errors->has('tanggal_lahir'))
					            <span class="text-danger">
					                *{{ $errors->first('tanggal_lahir') }}
					            </span>
					        @elseif ($errors->has('alamat'))
					            <span class="text-danger">
					                *{{ $errors->first('alamat') }}
					            </span>
					        @elseif ($errors->has('no_telp'))
					            <span class="text-danger">
					                *{{ $errors->first('no_telp') }}
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
