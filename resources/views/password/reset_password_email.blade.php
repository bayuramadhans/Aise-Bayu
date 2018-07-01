@extends('layout.headerfooter')
@section('title')
Reset Password
@endsection
@section('link')
<link rel="stylesheet" href="/css/login_detailform_registeralpro.css">
@endsection
@section('content')
<div class="container">
  <div class="row main">
    <div class="main-login main-center">
    <h5 class="ttitle">Reset Password</h5>
      <form class="" method="post" action="{{ route('resetPass.email') }}">
          {{ csrf_field() }}
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" class="cols-sm-2 control-label">Email</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <input type="text" class="form-control" id="email" name="email" placeholder="Email"/>
            </div>
          </div>
        </div>
        @if($errors->has('email'))
        <span class="text-danger msg">
            *{{ $errors->first('email') }}
        </span>
        @endif
        @include('flash::message')
        <div>
          <button type="submit" id="button" class="btn btn-success btn-block">Kirim</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
