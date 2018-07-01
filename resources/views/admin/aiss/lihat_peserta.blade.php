@extends('admin.layout.headerfooter')
@section('link')
<link rel="stylesheet" href="{{ url('css/admin-aiss.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="">
        <img src="{{ url('/admin/aiss/bukti') . '/' . $pesertaAiss->id }}" alt="">
        <h5>{{ $pesertaAiss->nama_lengkap }}</h5>
    </div>
</div>
@endsection
