@extends('admin.layout.headerfooter')
@section('link')
<link rel="stylesheet" href="{{ url('css/admin-aiss.css') }}">
@endsection
@section('content')
<div class="">
    @include('flash::message')
    <div class="row counting" style="margin-bottom: 20px">
        <div class="col-xs-4 col-lg-4 col-sm-4 col-md-4">
            Total User : {{ $totUser }}
        </div>
        <div class="col-xs-4 col-lg-4 col-sm-4 col-md-4">
            Verifed : {{ $verifed }}
        </div>
        <div class="col-xs-4 col-lg-4 col-sm-4 col-md-4">
            Not Ver : {{ $notVerifed }}
        </div>
    </div>
    <ul id="accordion" class="list-group">
        <?php
            $count = 0;
        ?>
        @foreach($users as $user)
            <?php
                $count++;
            ?>
            @if ($user->confirmed == 1)
                <li class="list-group-item list-group-item-success list-group-item-action flex-column align-items-start">
            @else
                <li class="list-group-item list-group-item-action flex-column align-items-start">
            @endif
            <div class="row">
                <div class="col-lg-9 col-sm-9 col-md-9 col-xs-7">
                    <p>
                        {{ $user->email }}
                    </p>
                </div>
                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-5">
                    <div class="" style="float:right">
                        <a href="#">
                            <i class="material-icons align-middle">edit</i>
                        </a>
                        <a data-toggle="collapse" href="#usercollapse{{ $count }}" role="button" aria-controls="usercollapse{{ $count }}">
                            <i class="material-icons align-middle">info</i>
                        </a>
                    </div>
                </div>
            </div>
            <small>{{ date("d-m-Y H:i", strtotime($user->created_at)) }}</small>
            <div id="usercollapse{{ $count }}" class="collapse multi-collapse" >
                <hr style="margin-top: 5px; margin-bottom: 5px;">
                <div class="row" style="margin-bottom: 10px">
                    <div class="email col-xs-6 col-md-6 col-sm-6 col-lg-6 text-center">
                        <a class="button btn btn-primary" href="#" onclick="confirm('anda yakin?')">
                            Verifikasi Email
                        </a>
                    </div>
                    <div class="email col-xs-6 col-md-6 col-sm-6 col-lg-6 text-center" >
                        <a class="button btn btn-primary" href="#" onclick="confirm('anda yakin?')">
                            Password Reset
                        </a>
                    </div>
                </div>
                <div>
                    <div class="d-flex flex-row" style="display: flex !important">
                        <div class="p-2">ID : </div>
                        <div class="p-2">{{ $user->id }}</div>
                    </div>
                    <div class="d-flex flex-row" style="display: flex !important">
                        <div class="p-2">Email : </div>
                        <div class="p-2">{{ $user->email }}</div>
                    </div>
                    <div class="d-flex flex-row" style="display: flex !important">
                        <div class="p-2">Confirmed : </div>
                        <div class="p-2">{{ $user->confirmed }} </div>
                    </div>
                    <div class="d-flex flex-row" style="display: flex !important">
                        <div class="p-2">Confirmation Code : </div>
                        <div class="p-2" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{{ $user->confirmation_code }}</div>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
    <div class="" style="width: 100%; text-align: center">
        {{ $users->links() }}
    </div>
</div>
@endsection
