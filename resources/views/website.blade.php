<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <title>{{ env('APP_NAME') }} - @yield('page_title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- You can change the theme colors from here -->
    <link href="{{ asset('css/colors/green.css') }}" id="theme" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('/') }}">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Light Logo icon -->
                            <img src="{{ asset('images/icon-indicateam.png') }}" style="height: 50px" alt="homepage" class="light-logo"/>
                        </b>
                        <!--End Logo icon -->                            
                    </a>
             
                </div>
                <div class="navbar-collapse">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav mr-auto mt-md-0">
                            
                        </ul>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav my-lg-0">
                            <!-- ============================================================== -->
                            <!-- Comment -->
                            <!-- ============================================================== -->
                            <li class="nav-item">
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/dashboard') }}" style="color: #fff;padding:10px">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" style="color: #fff;padding:10px">Acesse já</a>            
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" style="color: #fff;padding:10px">Cadastre-se</a>
                                        @endif
                                    @endauth
                                @endif  
                            </li>
                        </ul>
                    </div>
            </nav>
        </header>    
    </div>
    <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div >


                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
    
    
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    
                    <!-- Row -->
                    <div class="row">
    
                        @yield('content')
    
                    </div>
                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->  
    
    
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
    
    
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer" style="left: 0px;">
                    © {{ date('Y') }} {{ env('APP_NAME') }} por <a href="{{ env('PUBLISHER_WEBSITE') }}" target="_blank">{{ env('APP_PUBLISHER') }}</a> 
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
    
    
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
            
        <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>

    <!--Wave Effects -->
    <script src="{{ asset('js/waves.js') }}"></script>

    <!--stickey kit -->
    <script src="{{ asset('plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('plugins/sparkline/jquery.sparkline.min.js') }}"></script>

    <!--Custom JavaScript -->
    <script src="{{ asset('js/custom.min.js') }}"></script>

    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ asset('plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
</body>
</html>