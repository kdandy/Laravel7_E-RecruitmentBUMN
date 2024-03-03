<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>E-Recruitment</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="{{asset('admin/vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet"
        type="text/css">
    <link href="{{asset('admin/vendors/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet"
        type="text/css">
    <link href="{{asset('admin/vendors/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />

    <!-- select2 CSS -->
    <link href="{{asset('admin/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Data Table CSS -->
    <link href="{{asset('admin/vendors/datatables.net-dt/css/jquery.dataTables.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('admin/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')}}"
        rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="{{asset('admin/vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet"
        type="text/css">
    <link href="{{asset('admin/dist/css/style.css')}}" rel="stylesheet" type="text/css">
    @stack('styles')
</head>

<body>
    <!-- HK Wrapper -->
    <div class="hk-wrapper hk-alt-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar hk-navbar-alt">
            <a class="navbar-toggle-btn nav-link-hover navbar-toggler" href="javascript:void(0);" data-toggle="collapse"
                data-target="#navbarCollapseAlt" aria-controls="navbarCollapseAlt" aria-expanded="false"
                aria-label="Toggle navigation"><span class="feather-icon"><i data-feather="menu"></i></span></a>
            <a class="navbar-brand text-red" href="{{Route('pelamarIndex')}}">
                E-Rekrutmen
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapseAlt">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown show-on-hover active">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Master Data
                        </a>
                        <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        @if(Auth::user()->status == 1)
                            <a class="dropdown-item" href="{{Route('ujiKompetensiHasil',['uuid'=>Auth::user()->peserta->lowongan->uuid])}}">Hasil Uji Kompetensi</a>
                            <a class="dropdown-item" href="{{Route('ujiKesehatanHasil')}}">Hasil Tes Kesehatan</a>
                            <a class="dropdown-item" href="{{Route('ujiWawancaraHasil')}}">Hasil Tes Wawancara</a>
                        @else
                            <a class="dropdown-item" href="#">Akun anda belum aktif</a>
                        @endif
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav hk-navbar-content">
                <!-- <li class="nav-item">
                    <a id="settings_toggle_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span
                            class="feather-icon"><i data-feather="bell"></i></span></a>
                </li> -->
                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar">
                                    <img src="{{asset('images/user/'. Auth::user()->foto)}}" alt="user"
                                        class="avatar-img rounded-circle">
                                </div>
                                <span class="badge badge-success badge-indicator"></span>
                            </div>
                            <div class="media-body">
                                <span>{{Auth::user()->name}}<i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX"
                        data-dropdown-out="flipOutX">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                                                         document.getElementById('logout-form').submit();">
                            <i class="feather icon-power"></i> Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /Top Navbar -->
        @yield('content')
    </div>
    <!-- /HK Wrapper -->
    @include('sweetalert::alert')
    <!-- jQuery -->
    <script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('admin/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{asset('admin/dist/js/jquery.slimscroll.js')}}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{asset('admin/dist/js/feather.min.js')}}"></script>

    <!-- Toggles JavaScript -->
    <script src="{{asset('admin/vendors/jquery-toggles/toggles.min.js')}}"></script>
    <script src="{{asset('admin/dist/js/toggle-data.js')}}"></script>

    <!-- Counter Animation JavaScript -->
    <script src="{{asset('admin/vendors/waypoints/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('admin/vendors/jquery.counterup/jquery.counterup.min.js')}}"></script>

    <!-- Easy pie chart JS -->
    <script src="{{asset('admin/vendors/easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>

    <!-- EChartJS JavaScript -->
    <script src="{{asset('admin/vendors/echarts/dist/echarts-en.min.js')}}"></script>

    <!-- Owl JavaScript -->
    <script src="{{asset('admin/vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>

    <!-- Toastr JS -->
    <script src="{{asset('admin/vendors/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>

    <!-- Data Table JavaScript -->
    <script src="{{asset('admin/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net-dt/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/dist/js/dataTables-data.js')}}"></script>

    <!-- Select2 JavaScript -->
    <script src="{{asset('admin/vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('admin/dist/js/select2-data.js')}}"></script>

    <!-- Tinymce JavaScript -->
    <script src="{{asset('admin/vendors/tinymce/tinymce.min.js')}}"></script>

    <!-- Tinymce Wysuhtml5 Init JavaScript -->
    <script src="{{asset('admin/dist/js/tinymce-data.js')}}"></script>
    <script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>


    <!-- Fancy Dropdown JS -->
    <script src="{{asset('admin/dist/js/dropdown-bootstrap-extended.js')}}"></script>
    <!-- Init JavaScript -->
    <script src="{{asset('admin/dist/js/init.js')}}"></script>
    <script src="{{asset('admin/dist/js/dashboard4-data.js')}}"></script>
    @yield('scripts')
</body>

</html>