<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield("title")</title>
    <link rel="icon" href="favicon.ico" type="{{ url('admin/image/x-icon') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ url('admin/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ url('admin/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ url('admin/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ url('admin/plugins/morrisjs/morris.css') }}" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="{{ url('admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{ url('admin/css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ url('admin/css/themes/all-themes.css') }}" rel="stylesheet" />@yield("link")
</head>
<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="teamalpro.blade.php" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand">Admin</a>
            </div>
            <!--
          <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
      -->
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{ url('admin/images/user.png') }}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="email">hogivano@gmail.com</div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">DASHBOARD</li>
                    <li class="active">
                        <a href="{{ route('dashboard.admin.show') }}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">group</i>
                            <span>ALRPO</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ route('admin.alpro.index') }}">Team</a>
                            </li>
                            <li>
                                <a href="{{ route('alpro.users.show') }}">Users</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">person</i>
                            <span>AISS</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ route('admin.aiss.index') }}">Peserta</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('admin.logout') }}">
                            <i class="material-icons">exit_to_app</i>
                            <span>Logout</span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a href="javascript:void(0);">Cyber AISE</a>
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <!-- <aside id="rightsidebar" class="right-sidebar">
            <ul>

            </ul>
            <a href="/adminlogout">
                <div class="menu-info">
                    <h5><font color="black">Sign Out</font></h5>
                </div>
            </a>

        </aside> -->
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
@yield('content')
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>
</body>
<script src="{{ url('/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Jquery Core Js -->
<script src="{{ url('admin/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core Js -->
<script src="{{ url('admin/plugins/bootstrap/js/bootstrap.js') }}"></script>

<!-- Select Plugin Js -->
<script src="{{ url('admin/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{ url('admin/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ url('admin/plugins/node-waves/waves.js') }}"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{ url('admin/plugins/jquery-countto/jquery.countTo.js') }}"></script>

<!-- Morris Plugin Js -->
<script src="{{ url('admin/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ url('admin/plugins/morrisjs/morris.js') }}"></script>

<!-- Jquery DataTable Plugin Js-->
<script src="{{ url('admin/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
<script src="{{ url('admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ url('admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
<script src="{{ url('admin/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
<script src="{{ url('admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
<script src="{{ url('admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
<script src="{{ url('admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
<script src="{{ url('admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

<!-- Custom Js -->
<script src="{{ url('admin/js/admin.js') }}"></script>
<script src="{{ url('admin/js/pages/tables/jquery-datatable.js') }}"></script>
<script src="{{ url('admin/js/pages/index.js') }}"></script>

<!-- Demo Js -->
<script src="{{ url('admin/js/demo.js') }}"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="{{ url('admin/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

@yield("script")
</html>
