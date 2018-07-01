@extends('admin.layout.headerfooter')
@section('link')
<link rel="stylesheet" href="{{ url('css/admin-aiss.css') }}">
@endsection
@section('content')
<div class="">
    @include('flash::message')
    <div class="row counting" style="margin-bottom: 20px">
        <div class="col-xs-4 col-lg-4 col-sm-4 col-md-4">
            Total Team : {{ $totTeam }}
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
            $countP = 0;
            $countU = 0;
        ?>
        @foreach($team as $i)
            <?php
                $count++;
            ?>
            @if ($i->status == 1)
                <li class="list-group-item list-group-item-success list-group-item-action flex-column align-items-start">
            @else
                <li class="list-group-item list-group-item-action flex-column align-items-start">
            @endif
            <div class="row">
                <div class="col-lg-9 col-sm-9 col-md-9 col-xs-7">
                    <p>
                        {{ $i->nama_team }}
                    </p>
                </div>
                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-5">
                    <div class="" style="float:right">
                        <a href="{{ url('/admin/alpro/team/edit') . '/' . $i->id_teams }}">
                            <i class="material-icons align-middle">edit</i>
                        </a>
                        <a href="{{ url('/admin/aiss/bukti') . '/' . $i->id }}" target="_blank">
                            <i class="material-icons align-middle">photo</i>
                        </a>
                        <a data-toggle="collapse" href="#collapse{{ $count }}" role="button" aria-expanded="false" aria-controls="collapse{{ $count }}">
                            <i class="material-icons align-middle">info</i>
                        </a>
                    </div>
                </div>
            </div>
            <small>{{ date("d-m-Y H:i", strtotime($i->created_at)) }}</small>
            <div id="collapse{{ $count }}" class="collapse" aria-labelledby="heading{{ $count }}" data-parent="#accordion">
                <div class="card-body">
                    <div class="row" style="margin-bottom: 10px">
                        <div class="email col-xs-4 col-md-4 col-sm-4 col-lg-4  text-center">
                            <a class="button btn btn-primary" onclick="confirm('anda yakin?')" href="{{ url('/admin/alpro/verifikasi-email') . '/' . $i->id_teams }}">
                                verifikasi
                            </a>
                        </div>
                        <div class="email col-xs-4 col-md-4 col-sm-4 col-lg-4  text-center">
                            <a class="button btn btn-primary" onclick="confirm('anda yakin?')" href="{{ url('/admin/alpro/buktisalah-email') . '/' . $i->id_teams }}">
                                bukti salah
                            </a>
                        </div>
                        <div class="email col-xs-4 col-md-4 col-sm-4 col-lg-4  text-center">
                            <a class="button btn btn-primary" href="{{ url('/admin/alpro/lengkapidata-email') . '/' . $i->id_teams }}" onclick="confirm('anda yakin?')">
                                leng data
                            </a>
                        </div>
                    </div>
                    <!-- <div class="d-flex flex-column"> -->
                    <div class="d-flex flex-row" style="display: flex !important">
                        <div class="p-2">ID : </div>
                        <div class="p-2">{{ $i->id_teams }}</div>
                    </div>
                    <div class="d-flex flex-row" style="display: flex !important">
                        <div class="p-2">Nama Team : </div>
                        <div class="p-2">{{ $i->nama_team }}</div>
                    </div>
                    <div class="d-flex flex-row" style="display: flex !important">
                        <div class="p-2">Kota : </div>
                        <div class="p-2">{{ $i->kota }}</div>
                    </div>
                    <div class="d-flex flex-row" style="display: flex !important">
                        <div class="p-2">Asal Sekolah : </div>
                        <div class="p-2">{{ $i->asal_sekolah }}</div>
                    </div>
                    <div class="d-flex flex-row" style="display: flex !important">
                        <div class="p-2">Nama Pembina : </div>
                        <div class="p-2">{{ $i->nama_pembina }}</div>
                    </div>
                    <div class="d-flex flex-row" style="display: flex !important">
                        <div class="p-2">No Telp Pembina : </div>
                        <div class="p-2">{{ $i->no_telp_pembina }}</div>
                    </div>
                    <p style="margin: 10px 0">Participan :</p>
                    <ul id="accordionP" class="list-group">
                        @foreach($i->participans as $participan)
                        <?php
                            $countP++;
                        ?>
                        @if ($i->status == 1)
                            <li class="list-group-item list-group-item-success list-group-item-action flex-column align-items-start">
                        @else
                            <li class="list-group-item list-group-item-action flex-column align-items-start">
                        @endif
                                <div class="row">
                                    <div class="col-lg-9 col-sm-9 col-md-9 col-xs-7">
                                        <p>
                                            {{ $participan->nama_lengkap }}
                                        </p>
                                    </div>
                                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-5">
                                        <div class="" style="float:right">
                                            <a href="{{ url('/admin/alpro/participan/edit') . '/' . $participan->id }}">
                                                <i class="material-icons align-middle">edit</i>
                                            </a>
                                            <a data-toggle="collapse" href="#participancollapse{{ $countP }}" role="button" aria-controls="participancollapse{{ $countP }}">
                                                <i class="material-icons align-middle">info</i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <small>{{ date("d-m-Y H:i", strtotime($participan->created_at)) }}</small>
                                <div id="participancollapse{{ $countP }}" class="collapse multi-collapse" >
                                    <hr style="margin-top: 5px; margin-bottom: 5px;">
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="email col-xs-6 col-md-6 col-sm-6 col-lg-6 text-center">
                                            <a class="button btn btn-primary" href="{{ url('/admin/aiss/verifikasi-email') . '/' . $i->id }}">
                                                Pas Foto
                                            </a>
                                        </div>
                                        <div class="email col-xs-6 col-md-6 col-sm-6 col-lg-6 text-center" >
                                            <a class="button btn btn-primary" href="{{ url('/admin/aiss/buktisalah-email') . '/' . $i->id }}">
                                                Foto Ktp
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex flex-row" style="display: flex !important">
                                            <div class="p-2">ID : </div>
                                            <div class="p-2">{{ $participan->id }}</div>
                                        </div>
                                        <div class="d-flex flex-row" style="display: flex !important">
                                            <div class="p-2">Nama Lengkap : </div>
                                            <div class="p-2">{{ $participan->nama_lengkap }}</div>
                                        </div>
                                        <div class="d-flex flex-row" style="display: flex !important">
                                            <div class="p-2">Ttl : </div>
                                            <div class="p-2">{{ $participan->tempat_lahir }}, {{ date("d-m-Y", strtotime($participan->tanggal_lahir)) }} </div>
                                        </div>
                                        <div class="d-flex flex-row" style="display: flex !important">
                                            <div class="p-2">Alamat : </div>
                                            <div class="p-2">{{ $participan->alamat }}</div>
                                        </div>
                                        <div class="d-flex flex-row" style="display: flex !important">
                                            <div class="p-2">No Telp : </div>
                                            <div class="p-2">{{ $participan->no_telp }}</div>
                                        </div>
                                        <div class="d-flex flex-row" style="display: flex !important">
                                            <div class="p-2">Pas Foto</div>
                                            <div class="p-2" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">: {{ $participan->pas_foto }}</div>
                                        </div>
                                        <div class="d-flex flex-row" style="display: flex !important">
                                            <div class="p-2">Foto Ktp </div>
                                            <div class="p-2" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">: {{ $participan->foto_ktp }}</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <p style="margin: 10px 0">Users :</p>
                    <ul id="accordionU" class="list-group">
                        @foreach($i->users as $user)
                        <?php
                            $countU++;
                        ?>
                        @if ($i->status == 1)
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
                                        <a data-toggle="collapse" href="#usercollapse{{ $countU }}" role="button" aria-controls="usercollapse{{ $countU }}">
                                            <i class="material-icons align-middle">info</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <small>{{ date("d-m-Y H:i", strtotime($user->created_at)) }}</small>
                            <div id="usercollapse{{ $countU }}" class="collapse multi-collapse" >
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
                </div>
            </div>
        </li>
        @endforeach
    </ul>
    <div class="" style="width: 100%; text-align: center">
        {{ $team->links() }}
    </div>
</div>
@endsection
