@extends('layout.headerfooter')
@section('title')
Ganti Password
@endsection
@section('link')
<link rel="stylesheet" href="/css/login_detailform_registeralpro.css">
@endsection
@section('content')
<div class="container">
  <div class="row main">
    <div class="main-login main-center">
    <h5 class="ttitle">Password Baru</h5>
      <form class="" method="post" action="{{ url('/password/reset/') .'/' . $token }}">
          {{ csrf_field() }}
          <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" class="cols-sm-2 control-label">Email</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <input type="text" class="form-control" id="email" name="email" placeholder="Email"/>
            </div>
          </div>
        </div>
        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="password" class="cols-sm-2 control-label">Password</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password"/>
            </div>
          </div>
        </div>
        <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
          <label for="password_confirmation" class="cols-sm-2 control-label">Re-password</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-password"/>
            </div>
          </div>
        </div>
        @if($errors->has('email'))
        <span class="text-danger msg">
            *{{ $errors->first('email') }}
        </span>
        @elseif($errors->has('password'))
        <span class="text-danger msg">
            *{{ $errors->first('password') }}
        </span>
        @elseif($errors->has('password_confirmation'))
        <span class="text-danger msg">
            *{{ $errors->first('password_confirmation') }}
        </span>
        @endif
        @include('flash::message')
        <div>
          <button type="submit" id="button" class="btn btn-success btn-block">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
