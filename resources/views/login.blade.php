@extends('layout.headerfooter')
@section('title')
Masuk
@endsection
@section('link')
<link rel="stylesheet" href="/css/login_detailform_registeralpro.css">
@endsection
@section('content')
<div class="container">
  <div class="row main">
    <div class="main-login main-center">
    <h5 class="ttitle">Masuk</h5>
      <form class="" method="post" action="{{ route('masuk.users') }}">
          {{ csrf_field() }}
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" class="cols-sm-2 control-label">Email</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <input type="email" class="form-control" value="{{ old('email') }}" required name="email" id="email"  placeholder="Masukkan Email"/>
            </div>
          </div>
        </div>

        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="password" class="cols-sm-2 control-label">Password</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <input type="password" class="form-control" name="password" id="password" required  placeholder="Masukkan Password"/>
            </div>
          </div>
        </div>
        <div>
          <a href="{{ route('resetPass.form') }}"><font color="white">Lupa password?</font></a>
        </div>
        @if($errors->has('email'))
        <span class="text-danger msg">
            *{{ $errors->first('email') }}
        </span>
        @elseif ($errors->has('password'))
            <span class="text-danger msg">
                *{{ $errors->first('password') }}
            </span>
        @endif
        @include('flash::message')
        <div>
          <button type="submit" id="button" class="btn btn-success btn-block">Masuk</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
