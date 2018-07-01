@extends('layout.headerfooter')
@section('link')
<link rel="stylesheet" href="/css/login_detailform_registeralpro.css">
@endsection
@section('content')
<div class="container">
  <div class="row main">
    <div class="main-login main-center">
    <h5 class="align-center" style="align:center">Daftar Akun ALPRO</h5>
      <form class="" method="POST" action="{{ route('store.users') }}">
          {{ csrf_field() }}
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" class="cols-sm-2 control-label">Email</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required placeholder="Masukkan Alamat Emailmu"/>
            </div>
          </div>
        </div>

        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="password" class="cols-sm-2 control-label">Password</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <input type="password" class="form-control" name="password" id="password" required  placeholder="Ketik Password yang Diinginkan"/>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="repassword" class="cols-sm-2 control-label">Confirm Password</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <input type="password" class="form-control" name="password_confirmation" required id="repassword"  placeholder="Ketik Password Sekali Lagi"/>
            </div>
          </div>
        </div>
        @if($errors->has('email'))
        <span class="text-danger">
            *{{ $errors->first('email') }}
        </span>
        @elseif ($errors->has('password'))
            <span class="text-danger">
                *{{ $errors->first('password') }}
            </span>
        @endif
        @include('flash::message')
        <div style="margin-top: 20px">
            <button type="submit" name="daftar" class="btn btn-success btn-block">Daftar</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
