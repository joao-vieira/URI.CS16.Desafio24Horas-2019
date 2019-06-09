<!doctype html>
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


<body class="fix-sidebar fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>



    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">





        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">


                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('/') }}">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Light Logo icon -->
                            <img src="{{ asset('images/icon-indicateam.png') }}" style="height: 50px" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->

                
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('images/users/profile.png') }}" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="{{ asset('images/users/1.jpg') }}" alt="user"></div>
                                            <div class="u-text">
                                                <h4>Usuário</h4>
                                                <p class="text-muted">demonstracao@email.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">Ver Perfil</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> Meu Perfil</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> Estatísticas</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Caixa de Entrada</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Configurações</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="fa fa-power-off"></i> Sair</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-br"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->





        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">

                <!-- User profile -->
                <div class="user-profile" style="background: url({{ asset('images/background/user-info.jpg') }}) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="{{ asset('images/users/profile.png') }}"  alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Usuário</a>
                        <div class="dropdown-menu animated flipInY">
                            <a href="#" class="dropdown-item"><i class="ti-user"></i> Meu Perfil</a>
                            <a href="#" class="dropdown-item"><i class="ti-wallet"></i> Estatísticas</a>
                            <a href="#" class="dropdown-item"><i class="ti-email"></i> Caixa de Entrada</a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Configurações</a>
                            <div class="dropdown-divider"></div> <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Sair</a>
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->

                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">SISTEMA</li>
                        
                        <li> <a class="waves-effect waves-dark" href="{{ route('dashboard') }}" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu"> Dashboard </span></a> </li>
                        
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-line"></i><span class="hide-menu">Indicadores </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('indicadores.qualidade') }}">Qualidade</a></li>
                                <li><a href="{{ route('indicadores.performance') }}">Performance</a></li>
                                <li><a href="{{ route('indicadores.disponibilidade') }}">Disponibilidade</a></li>
                            </ul>
                        </li>
                        
                        <li> <a class="waves-effect waves-dark" href="{{ route('dicionario') }}" aria-expanded="false"><i class="mdi mdi-library-books"></i><span class="hide-menu"> Dicionário </span></a> </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->

            </div>
            <!-- End Sidebar scroll-->
            
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="Configurações"><i class="ti-settings"></i></a>
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="Sair"><i class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->

        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->






        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">


            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">


                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0"> INDICATEam </h3>
                        <ol class="breadcrumb">

                            @yield('breadcrumbs')
                            
                        </ol>
                    </div>
                </div>
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
                
                
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- FOI REMOVIDA.-->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->



            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->


            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © {{ date('Y') }} {{ env('APP_NAME') }} por <a href="{{ env('PUBLISHER_WEBSITE') }}" target="_blank">{{ env('APP_PUBLISHER') }}</a> 
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->


        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->





    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
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

    <!--Menu sidebar -->
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>

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
