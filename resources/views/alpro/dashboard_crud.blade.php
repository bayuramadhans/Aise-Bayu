@extends('layout.headerfooter')

@section('content')
<div class="">
    <h1>Update Team Data</h1>
    <form action="{{ route('dashboard.alpro.update.post') }}" method="POST" enctype=multipart/form-data>
        {{ csrf_field() }}
        <div class="form-group">
            <label>Nama Team</label>
            <input id="nama_team" name="nama_team" type="text" required class="form-control" placeholder="nama team" value="{{$team->nama_team}}">
        </div>
        <div class="form-group">
            <label>Kota</label>
            <input id="kota" name="kota" type="text" required class="form-control" placeholder="kota" value="{{$team->kota}}">
        </div>
        <div class="form-group">
            <label>Asal Sekolah</label>
            <input id="asal_sekolah" name="asal_sekolah" type="text" required class="form-control" placeholder="asal sekolah" value="{{$team->asal_sekolah}}">
        </div>
        <div class="form-group">
            <label>Nama Pembina</label>
            <input id="nama_pembina" name="nama_pembina" type="text" class="form-control" placeholder="nama pembina" value="{{$team->nama_pembina}}">
        </div>
        <div class="form-group">
            <label>No Telp Pembina</label>
            <input id="no_telp_pembina" name="no_telp_pembina" type="text" class="form-control" placeholder="no telp pembina" value="{{$team->no_telp_pembina}}">
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h4>Data diri ketua</h4>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input id="nama_lengkap_ketua" name="nama_lengkap_ketua" type="text" required class="form-control" placeholder="nama lengkap" value="{{$participan1->nama_lengkap}}">
                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input id="tempat_lahir_ketua" name="tempat_lahir_ketua" type="text" required class="form-control" placeholder="tempat lahir" value="{{$participan1->tempat_lahir}}">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input id="tanggal_lahir_ketua" name="tanggal_lahir_ketua" type="date" required class="form-control" placeholder="tanggal lahir" value="{{$participan1->tanggal_lahir}}">
                </div>
                <div class="form-group">
                    <label>alamat</label>
                    <input id="alamat_ketua" name="alamat_ketua" type="text" required class="form-control" placeholder="alamat lengkap" value="{{$participan1->alamat}}">
                </div>
                <div class="form-group">
                    <label>no telp</label>
                    <input id="no_telp_ketua" name="no_telp_ketua" type="text" required class="form-control" placeholder="no telp" value="{{$participan1->no_telp}}">
                </div>
                <div class="form-group">
                    <label>pas foto</label>
                    <input id="pas_foto_ketua" name="pas_foto_ketua" type="file">
                </div>
                <div class="form-group">
                    <label>foto ktp</label>
                    <input id="foto_ktp_ketua" name="foto_ktp_ketua" type="file">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h4>Data diri anggota</h4>
                <input type="checkbox" name="input_anggota" value=True hidden=True>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input id="nama_lengkap_anggota" name="nama_lengkap_anggota" type="text" class="form-control"placeholder="nama lengkap" value="{{$participan2->nama_lengkap}}">
                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input id="tempat_lahir_anggota" name="tempat_lahir_anggota" type="text" class="form-control"placeholder="tempat lahir" value="{{$participan2->tempat_lahir}}">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input id="tanggal_lahir_anggota" name="tanggal_lahir_anggota" type="date" class="form-control"placeholder="tanggal lahir" value="{{$participan2->tanggal_lahir}}">
                </div>
                <div class="form-group">
                    <label>alamat</label>
                    <input id="alamat_anggota" name="alamat_anggota" type="text" class="form-control"placeholder="alamat lengkap" value="{{$participan2->alamat}}">
                </div>
                <div class="form-group">
                    <label>no telp</label>
                    <input id="no_telp_anggota" name="no_telp_anggota" type="text" class="form-control"placeholder="no telp" value="{{$participan2->no_telp}}">
                </div>
                <div class="form-group">
                    <label>pas foto</label>
                    <input id="pas_foto_anggota" name="pas_foto_anggota1" type="file">
                </div>
                <div class="form-group">
                    <label>foto ktp</label>
                    <input id="foto_ktp_anggota" name="foto_ktp_anggota1" type="file">
                </div>
                </div>
            </div>
        </div>
        <button name="btn_post" type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
