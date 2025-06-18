<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="./temp/assets/css/bill.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.css" integrity="sha512-Woz+DqWYJ51bpVk5Fv0yES/edIMXjj3Ynda+KWTIkGoynAMHrqTcDUQltbipuiaD5ymEo9520lyoVOo9jCQOCA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Admin Panel</title>
    <link rel="apple-touch-icon" href="../../../temp/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../temp/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

     <!-- BEGIN: Vendor CSS-->
     <link rel="stylesheet" type="text/css" href="../../../temp/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../temp/app-assets/vendors/css/pickers/daterange/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="../../../temp/app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="../../../temp/app-assets/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="../../../temp/app-assets/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="../../../temp/app-assets/fonts/meteocons/style.css">
    <link rel="stylesheet" type="text/css" href="../../../temp/app-assets/vendors/css/charts/morris.css">
    <!-- END: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../temp/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../temp/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../temp/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../temp/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../temp/app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../temp/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../temp/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../../temp/app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="../../../temp/app-assets/css/pages/timeline.css">
    <!-- END: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../temp/app-assets/css/pages/app-chat.css">
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../temp/app-assets/css/style.css">
    <!-- END: Custom CSS-->
    <script src="../../../temp/app-assets/vendors/js/vendors.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
    <style>
        a{
            text-decoration:none !important;
        }
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->


<body class="vertical-layout vertical-menu 2-columns content-left-sidebar chat-application  fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-light bg-gradient-x-grey-blue">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="feather icon-menu font-large-1"></i></a></li>
                    <li class="nav-item"><a class="navbar-brand" href="../../../temp/html/ltr/vertical-menu-template/index.html"><img class="brand-logo" alt="stack admin logo" src="../../../temp/app-assets/images/logo/stack-logo.png">
                            <h2 class="brand-text">Vet Admin</h2>
                        </a></li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="feather icon-menu"></i></a></li>

                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon feather icon-maximize"></i></a></li>

                    </ul>
                    <ul class="nav navbar-nav float-right">

                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                        {{ Auth::user()->name }}  
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="user-profile.html"><i class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="user-cards.html"><i class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a>
                                <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="feather icon-power"></i> Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header"><span>General</span><i class=" feather icon-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
                </li>
                <li class=""><a href="{{route('dashboard')}}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>

                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-book-open"></i><span class="menu-title" data-i18n="Templates">Inventory Management</span></a>
                    <ul class="menu-content">
                    <li @if (Route::is('show')) class="active" @endif><a class="menu-item" href="{{route('show')}}" data-i18n="2 columns">Product</a>
                        </li>
                        <li @if (Route::is('bill')) class="active" @endif><a class="menu-item" href="{{route('bill')}}" data-i18n="2 columns">Bill</a>
                        </li>
                        <li @if (Route::is('ShowSold')) class="active" @endif><a class="menu-item" href="{{route('ShowSold')}}" data-i18n="2 columns">Sold Products</a>
                        </li>
                      
                       
                   
                        
                        
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-book-open"></i><span class="menu-title" data-i18n="Templates">Owner Management</span></a>
                    <ul class="menu-content">
                   
                        <li @if (Route::is('Owner')) class="active" @endif><a class="menu-item" href="{{route('Owner')}}" data-i18n="2 columns">Add Owners</a>
                        </li>
                        <li @if (Route::is('Pet')) class="active" @endif><a class="menu-item" href="{{route('Pet')}}" data-i18n="2 columns">Add Pets</a>
                        </li>
                   
                        
                        
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- yeild view/content here -->
    @yield('content')

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-dark navbar-border">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2023 <a class="text-bold-800 grey darken-2" href="http://slayerdevs.com" target="_blank">Slayer Devs </a></span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    {{-- <script src="../../../temp/app-assets/vendors/js/vendors.min.js"></script> --}}
    <!-- BEGIN Vendor JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../../../temp/app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="../../../temp/app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js"></script>
    <script src="../../../temp/app-assets/vendors/js/pickers/daterange/daterangepicker.js"></script>
    <script src="../../../temp/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="../../../temp/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="../../../temp/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../temp/app-assets/vendors/js/extensions/unslider-min.js"></script>
    <script src="../../../temp/app-assets/vendors/js/timeline/horizontal-timeline.js"></script>
    <!-- END: Page Vendor JS-->
    <script src="../../../temp/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <!-- BEGIN: Theme JS-->
    <script src="../../../temp/app-assets/js/core/app-menu.js"></script>
    <script src="../../../temp/app-assets/js/core/app.js"></script>
    <script src="../../../temp/app-assets/js/scripts/pages/app-chat.js"></script>
    <!-- END: Theme JS-->
    <script src="../../../temp/app-assets/js/scripts/tables/datatables/datatable-basic.js"></script>
    <!-- BEGIN: Page JS-->
    <script src="../../../temp/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <script src="../../../temp/app-assets/js/scripts/forms/wizard-steps.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>

</body>
<!-- END: Body-->

</html>
