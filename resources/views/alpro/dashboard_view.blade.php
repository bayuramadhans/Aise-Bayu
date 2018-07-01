<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard Tim Alpro</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ url('/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ url('/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/css/lib/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ url('/css/lib/owl.carousel.min.css') }}" rel="stylesheet" >
    <link href="{{ url('/css/lib/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ url('/css/helper.css') }}" rel="stylesheet">
    <link href="{{ url('/css/gentakgentukjos.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b><h5><font color="FFC107">AISE</font></h5></b>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>

                        <!-- End Messages -->
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $team->nama_team }}</a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Dashboard</li>
                        <li>
                          <a href="#" aria-expanded="false">
                          <i class="fa fa-tachometer"></i>
                          <span class="hide-menu">Dashboard</span>
                          </a>
                        </li>
                        <li class="nav-label">Akun</li>
                        <li>
                            <a href="#" aria-expanded="false">
                            <i class="fa fa-power-off"></i>
                            <span class="hide-menu">Keluar</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Data Ketua -->
                <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                            <h3 class="text-primary">Data Tim</h3>
                            <div class="table-responsive m-t-40">
                                <table id="example23" class="display nowrap table table-hover" cellspacing="0" width="100%">
                                        <tr>
                                          <td>Nama Tim</td>
                                          <td>=</td>
                                          <td>{{ $team->nama_team }}</td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                        <tr>
                                          <td>Kota</td>
                                          <td>=</td>
                                          <td>{{ $team->kota }}</td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                        <tr>
                                          <td>Asal Sekolah</td>
                                          <td>=</td>
                                          <td>{{ $team->asal_sekolah }}</td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                        <tr>
                                          <td>Nama Pembina</td>
                                          <td>=</td>
                                          <td>{{ $team->nama_pembina }}</td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                        <tr>
                                          <td>Kontak Pembina</td>
                                          <td>=</td>
                                          <td>{{ $team->no_telp_pembina }}</td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                        <tr>
                                          <td>Bukti Pembayaran</td>
                                          <td>=</td>
                                          <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bukti-pembayaran">Lihat</button>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                              </div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ketua-edit">Edit</button>
                            <!-- Modal -->
                            <div class="modal fade" id="ketua-edit" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Edit Data Ketua</h5>
                                  </div>
                                  <div class="modal-body">
                                    <form class="form p-t-20">
                                        <div class="form-group">
                                            <label for="exampleInputuname">Nama Ketua</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="namaketua" placeholder="Nama Ketua">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputuname">Tempat Tanggal Lahir</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="namaanggota" placeholder="Nama Anggota">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputuname">Alamat</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="asalsekolah" placeholder="Asal Sekolah">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputuname">Nomor Telepon</label>
                                            <div class="input-group">
                                                <input type="email" class="form-control" id="emailketua" placeholder="Email Ketua">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputuname">Pas Foto</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="nomorhp" placeholder="Nomor HP">
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                      <button type="button" class="btn btn-primary">Simpan</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <!-- Modal Bukti Pembayaran-->
                            <div class="modal fade" id="bukti-pembayaran" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Kelengkapan</h5>
                                  </div>
                                  <div class="modal-body">
                                    <img src="/storage/pas_foto_anggota/{{ $participan1->pas_foto }}" alt="">
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                 </div>
                             </div>
                            </div>
                          </div>
                          <!-- Modal KTP Ketua-->
                          <div class="modal fade" id="ketua-ktp" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Kelengkapan</h5>
                                </div>
                                <div class="modal-body">
                                  <img src="/storage/foto_ktp_anggota/{{ $participan1->foto_ktp }}" alt="">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                               </div>
                           </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

                <!-- Data Ketua -->
                <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                            <h3 class="text-primary">Data Ketua</h3>
                            <div class="table-responsive m-t-40">
                                <table id="example23" class="display nowrap table table-hover" cellspacing="0" width="100%">
                                        <tr>
                                          <td>Nama</td>
                                          <td>=</td>
                                          <td>{{ $participan1->nama_lengkap }}</td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                        <tr>
                                          <td>Tempat Tanggal Lahir</td>
                                          <td>=</td>
                                          <td>{{ $participan1->tempat_lahir }}, {{ $participan1->tanggal_lahir }}</td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                        <tr>
                                          <td>Alamat</td>
                                          <td>=</td>
                                          <td>{{ $participan1->alamat }}</td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                        <tr>
                                          <td>Nomor Telepon</td>
                                          <td>=</td>
                                          <td>{{ $participan1->no_telp }}</td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                        <tr>
                                          <td>Pas Foto</td>
                                          <td>=</td>
                                          <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ketua-foto">Lihat</button>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                        <tr>
                                          <td>KTP</td>
                                          <td>=</td>
                                          <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ketua-ktp">Lihat</button>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                  </tbody>
                                </table>
                              </div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ketua-edit">Edit</button>
                            <!-- Modal -->
                            <div class="modal fade" id="ketua-edit" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Edit Data Ketua</h5>
                                  </div>
                                  <div class="modal-body">
                                    <form class="form p-t-20">
                                        <div class="form-group">
                                            <label for="exampleInputuname">Nama Anggota</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="namaketua" placeholder="Nama Anggota">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputuname">Tempat Tanggal Lahir</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="namaanggota" placeholder="Tempat Tanggal Lahir">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputuname">Alamat</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="asalsekolah" placeholder="Alamat">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputuname">Nomor Telepon</label>
                                            <div class="input-group">
                                                <input type="email" class="form-control" id="emailketua" placeholder="Nomor Telepon">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputuname">Pas Foto</label>
                                            <div class="btn btn-primary">
                                							<input type="file" name="file" size="100%"/>
                                						</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputuname">KTP</label>
                                            <div class="btn btn-primary">
                                							<input type="file" name="file"/>
                                						</div>
                                        </div>
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                      <button type="button" class="btn btn-primary">Simpan</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <!-- Modal Foto Ketua-->
                            <div class="modal fade" id="ketua-foto" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Kelengkapan</h5>
                                  </div>
                                  <div class="modal-body">
                                    <img src="/storage/pas_foto_anggota/{{ $participan1->pas_foto }}" alt="">
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                 </div>
                             </div>
                            </div>
                          </div>
                          <!-- Modal KTP Ketua-->
                          <div class="modal fade" id="ketua-ktp" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Kelengkapan</h5>
                                </div>
                                <div class="modal-body">
                                  <img src="/storage/foto_ktp_anggota/{{ $participan1->foto_ktp }}" alt="">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                               </div>
                           </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

                <!-- Data Anggota -->
                <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                            <h3 class="text-primary">Data Anggota</h3>
                            <div class="table-responsive m-t-40">
                                <table id="example23" class="display nowrap table table-hover" cellspacing="0" width="100%">
                                        <tr>
                                          <td>Nama</td>
                                          <td>=</td>
                                          <td>{{ $participan2->nama_lengkap }}</td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                        <tr>
                                          <td>Tempat Tanggal Lahir</td>
                                          <td>=</td>
                                          <td>{{ $participan2->tempat_lahir }}, {{ $participan2->tanggal_lahir }}</td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                        <tr>
                                          <td>Alamat</td>
                                          <td>=</td>
                                          <td>{{ $participan2->alamat }}</td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                        <tr>
                                          <td>Nomor Telepon</td>
                                          <td>=</td>
                                          <td>{{ $participan2->no_telp }}</td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                        <tr>
                                          <td>Pas Foto</td>
                                          <td>=</td>
                                          <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#anggota-foto">Lihat</button>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                        <tr>
                                          <td>KTP</td>
                                          <td>=</td>
                                          <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#anggota-ktp">Lihat</button>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                  </tbody>
                                </table>
                              </div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#anggota-edit">Edit</button>
                            <!-- Modal -->
                            <div class="modal fade" id="anggota-edit" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Edit Data Anggota</h5>
                                  </div>
                                  <div class="modal-body">
                                    <form class="form p-t-20">
                                        <div class="form-group">
                                            <label for="exampleInputuname">Nama Anggota</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="namaketua" placeholder="Nama Anggota">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputuname">Tempat Tanggal Lahir</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="namaanggota" placeholder="Tempat Tanggal Lahir">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputuname">Alamat</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="asalsekolah" placeholder="Alamat">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputuname">Nomor Telepon</label>
                                            <div class="input-group">
                                                <input type="email" class="form-control" id="emailketua" placeholder="Nomor Telepon">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputuname">Pas Foto</label>
                                            <div class="file btn btn-lg btn-primary">
                                							Upload
                                							<input type="file" name="file"/>
                                						</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputuname">KTP</label>
                                            <div class="file btn btn-lg btn-primary">
                                							Upload
                                							<input type="file" name="file"/>
                                						</div>
                                        </div>
                                    </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <!-- Modal Foto Anggota-->
                            <div class="modal fade" id="anggota-foto" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Kelengkapan</h5>
                                  </div>
                                  <div class="modal-body">
                                    <img src="/storage/pas_foto_anggota/{{ $participan2->pas_foto }}" alt="">
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                 </div>
                             </div>
                            </div>
                          </div>
                          <!-- Modal KTP Anggota-->
                          <div class="modal fade" id="anggota-ktp" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Kelengkapan</h5>
                                </div>
                                <div class="modal-body">
                                  <img src="/storage/foto_ktp_anggota/{{ $participan2->foto_ktp }}" alt="">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                               </div>
                           </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="{{ url('/js/lib/jquery/jquery.min.js') }}"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ url('/js/jquery.slimscroll.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ url('/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ url('/js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <!--Custom JavaScript -->


    <!-- Amchart -->
     <script src="{{ url('/js/lib/morris-chart/raphael-min.js') }}"></script>
    <script src="{{ url('/js/lib/morris-chart/morris.js') }}"></script>
    <script src="{{ url('/js/lib/morris-chart/dashboard1-init.js') }}"></script>
    <script src="{{ url('/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>

    <!-- scripit init-->

    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ url('/js/lib/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ url('/js/lib/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ url('/js/scripts.js') }}"></script>

</body>
</html>
