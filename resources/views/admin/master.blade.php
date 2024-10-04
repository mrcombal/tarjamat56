<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @routes
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('icons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('icons/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('icons/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('icons/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('icons/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('icons/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('icons/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('icons/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('icons/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('icons/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('icons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('icons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('icons/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('icons/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/PACE/themes/blue/pace-theme-flash.css')}}">
    <script type="text/javascript" src="{{asset('plugins/PACE/pace.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/animo.js/animate-animo.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/toastr/toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/SpinKit/css/spinners/7-three-bounce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/datatables.net-colreorder-bs/css/colReorder.bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-duallistbox/dist/bootstrap-duallistbox.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/first-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}">
    <style>
      .mCustomScrollBox, .mCSB_container {
        overflow: visible;;
      }
    </style>
    @yield('style')
    <!--[if lt IE 9]>
        <script type="text/javascript" src="{{url('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
        <script type="text/javascript" src="{{url('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body data-sidebar-color="sidebar-light" class="sidebar-light claro">
    <header>
        <a href="{{url('/admin')}}" class="brand pull-left"><img src="{{asset('images/tarjamat-logo-white.svg')}}" style="max-width: 80%;"></a><a href="javascript:;" role="button" class="hamburger-menu pull-left"><span></span></a>
        <ul class="notification-bar list-inline pull-right">
            <li class="dropdown visible-lg visible-md">
                <a id="dropdownMenu2" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle header-icon">
                    <div class="media mt-0">
                        <div class="media-right media-middle pl-0"><i class="ti-settings mr-5"></i></div>
                    </div>
                </a>
                <ul aria-labelledby="dropdownMenu2" class="dropdown-menu dropdown-menu-right fs-12 animated fadeInDown">
                    <li><a href="{{url('admin/logout')}}"><i class="ti-power-off mr-5"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <div class="main-container">
        <aside data-mcs-theme="minimal-dark" class="main-sidebar mCustomScrollbar">
            <ul class="list-unstyled navigation mb-20 mt-20">
                <li class="sidebar-category pt-0">Main</li>
                <li><a href="{{route('index')}}" class="bubble {{Request::is('admin') ? 'active' : Request::url()}}"><i class="ti-home"></i><span class="sidebar-title">Dashboard</span></a></li>
                <li><a href="{{route('faqs.index')}}" class="bubble {{Request::is('admin/faqs') ? 'active' : Request::url()}}"><i class="ti-home"></i><span class="sidebar-title">FAQs</span></a></li>
                <li><a href="{{route('services.index')}}" class="bubble {{Request::is('admin/services') ? 'active' : Request::url()}}"><i class="ti-home"></i><span class="sidebar-title">Services</span></a></li>
                <li><a href="{{route('generic-content.index')}}" class="bubble {{Request::is('admin/generic-content') ? 'active' : Request::url()}}"><i class="ti-home"></i><span class="sidebar-title">Generic Content</span></a></li>
            </ul>
        </aside>
        <div class="page-container">
            <div class="page-header clearfix">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="mt-0 mb-5">@yield('title2')</h4>
                        @yield('breadcrumps')
                    </div>
                    <div class="col-sm-6"></div>
                </div>
            </div>
            <div class="page-content container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{asset('plugins/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/animo.js/animo.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/moment/min/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/blockUI/jquery.blockUI.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/jquery-waypoints/waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/Counter-Up/jquery.counterup.min.js')}}"></script>
    <script type="text/javascript" src="{{url('https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/jszip/dist/jszip.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/pdfmake/build/pdfmake.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/pdfmake/build/vfs_fonts.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/datatables.net-colreorder/js/dataTables.colReorder.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/bootstrap-duallistbox/dist/jquery.bootstrap-duallistbox.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/demo.js')}}"></script>
    @yield('scripts')
  </body>
</html>
