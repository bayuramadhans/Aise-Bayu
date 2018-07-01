@extends('admin.layout.headerfooter')
@section('link')
<link rel="stylesheet" href="{{ url('css/admin-aiss.css') }}">
@endsection
@section('content')
    @include('flash::message')
<div class="row clearfix">
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="info-box bg-orange hover-expand-effect">
          <div class="icon">
              <i class="material-icons">person</i>
          </div>
          <div class="content">
              <div class="text">Jumlah Peserta AISS</div>
              <div class="number count-to" data-from="0" data-to="{{ $totPeserta }}" data-speed="100" data-fresh-interval="10"></div>
          </div>
      </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="info-box bg-orange hover-expand-effect">
          <div class="icon">
              <i class="material-icons">person</i>
          </div>
          <div class="content">
              <div class="text">Verified</div>
              <div class="number count-to" data-from="0" data-to="{{ $verifed }}" data-speed="100" data-fresh-interval="10"></div>
          </div>
      </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-8 col-xs-12">
      <div class="info-box bg-orange hover-expand-effect">
          <div class="icon">
              <i class="material-icons">person</i>
          </div>
          <div class="content">
              <div class="text">Not Verified</div>
              <div class="number count-to" data-from="0" data-to="{{ $notVerifed }}" data-speed="100" data-fresh-interval="10"></div>
          </div>
      </div>
  </div>
</div>
<body class="theme-red">
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
        <!-- Exportable Table -->
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header" align="center">
                                    <h1>
                                        Peserta AISS
                                    </h1>
                                </div>

                                <div class="body">
                                    <div class="table-responsive">
                                      <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>

                                                <tr>
                                                  <th>No.</th>
                                                  <th>Nama Lengkap</th>
                                                  <th>View</th>
                                                  <th>Edit</th>
                                                  <th>Bukti Pembayaran</th>
                                                  <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                  <th>No.</th>
                                                  <th>Nama Lengkap</th>
                                                  <th>View</th>
                                                  <th>Edit</th>
                                                  <th>Bukti Pembayaran</th>
                                                  <th>Status</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                              <?php
                                                  $count = 0;
                                                  $no=0;
                                              ?>
                                              @foreach($pesertaAiss as $i)
                                                  <?php
                                                      $count++;
                                                      $no++;
                                                  ?>

                                                <tr>
                                                  @if ($i->status == 1)
                                                    <td class="success">
                                                  @else
                                                  <td class="danger">
                                                  @endif
                                                    {{$no}}</td>
                                                    @if ($i->status == 1)
                                                      <td class="success">
                                                    @else
                                                    <td class="danger">
                                                    @endif
                                                    {{ $i->email }}</td>
                                                    @if ($i->status == 1)
                                                      <td class="success">
                                                    @else
                                                    <td class="danger">
                                                    @endif
                                                    <a data-toggle="collapse" href="#collapse{{ $count }}" role="button" aria-expanded="false" aria-controls="collapse{{ $count }}">
                                                        <i class="material-icons align-middle">info</i>
                                                    </a>
                                                    <div id="collapse{{ $count }}" class="collapse" aria-labelledby="heading{{ $count }}" data-parent="#accordion">
                                                        <div class="card-body">
                                                            <div class="d-flex flex-column">
                                                                <div class="d-flex">
                                                                    <div class="p-2">ID : </div>
                                                                    <div class="p-2">{{ $i->id }}</div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <div class="d-flex">
                                                                    <div class="p-2">Nama : </div>
                                                                    <div class="p-2">{{ $i->nama_lengkap }}</div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <div class="d-flex">
                                                                    <div class="p-2">Email : </div>
                                                                    <div class="p-2">{{ $i->email }}</div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <div class="d-flex">
                                                                    <div class="p-2">No Telp : </div>
                                                                    <div class="p-2">{{ $i->no_telp }}</div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <div class="d-flex">
                                                                    <div class="p-2">Institusi : </div>
                                                                    <div class="p-2">{{ $i->asal_institusi }}</div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <div class="d-flex">
                                                                    <div class="p-2">Tanggal Pendaftaran: </div>
                                                                    <div class="p-2">{{ date("d-m-Y H:i", strtotime($i->created_at)) }}</div>
                                                                </div>
                                                            </div>
                                                            @if ($i->status == 0)
                                                            <div class="d-flex">
                                                                <div class="p-2">
                                                                    <a class="button btn btn-primary" onclick="confirm('anda yakin?')" href="{{ url('/admin/aiss/verifikasi-email') . '/' . $i->id }}">
                                                                        verifikasi
                                                                    </a>
                                                                </div>
                                                                <div class="p-2">
                                                                    <a class="button btn btn-primary" onclick="confirm('anda yakin?')" href="{{ url('/admin/aiss/buktisalah-email') . '/' . $i->id }}">
                                                                        bukti salah
                                                                    </a>
                                                                </div>
                                                                <div class="p-2">
                                                                    <a class="button btn btn-primary" href="{{ url('/admin/aiss/datasalah-email') . '/' . $i->id }}" onclick="confirm('anda yakin?')">
                                                                        data salah
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            @else
                                                            @endif

                                                        </div>
                                                    </div></td>
                                                    @if ($i->status == 1)
                                                      <td class="success">
                                                    @else
                                                    <td class="danger">
                                                    @endif
                                                    <a href="{{ url('/admin/aiss/peserta/edit') . '/' . $i->id }}">
                                                            <i class="material-icons align-middle">edit</i>
                                                        </a></td>
                                                        @if ($i->status == 1)
                                                          <td class="success">
                                                        @else
                                                        <td class="danger">
                                                        @endif <a href="{{ url('/admin/aiss/bukti') . '/' . $i->id }}" target="_blank">
                                                        <i class="material-icons align-middle">photo</i>
                                                    </a></td>
                                                     @if ($i->status == 1)
                                                      <td class="success">Sudah Diverifikasi<a data-toggle="collapse" href="#collapse{{ $count }}" role="button" aria-expanded="false" aria-controls="collapse{{ $count }}">
                                                        <i class="material-icons align-middle">check_circle</i>
                                                    </a></td>
                                                      @else
                                                      <td class="danger">Belum Diverifikasi
                                                        <a data-toggle="collapse" href="#collapse{{ $count }}" role="button" aria-expanded="false" aria-controls="collapse{{ $count }}">
                                                          <i class="material-icons align-middle">warning</i>
                                                      </a>

                                                      </div></td>
                                                </tr>
                                                @endif
                                                 @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Exportable Table -->
</body>

    <div class="" style="width: 100%; text-align: center">
        {{ $pesertaAiss->links() }}
    </div>
@endsection
