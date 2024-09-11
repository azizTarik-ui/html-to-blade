<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="PqdeBCoZcKYhmoYb2S7vaaq3vUhCsvuFFbnIicTM">
    <!-- Favicon icon -->

    <link rel="icon" type="image/png" sizes="16x16"
        href="https://corporatetechbd.com/public/backend/images/favicon.png">
    <title>Corporate Technologies - Dashboard</title>

    <!-- Custom CSS -->
<link href="https://corporatetechbd.com/public//backend/libs/flot/css/float-chart.css" rel="stylesheet">
<link rel="stylesheet" type="text/css"
    href="https://corporatetechbd.com/public//backend/extra-libs/multicheck/multicheck.css">
<link href="https://corporatetechbd.com/public//backend/libs/datatables.net-bs4/css/dataTables.bootstrap4.css"
    rel="stylesheet">
<link rel="stylesheet" type="text/css"
    href="https://corporatetechbd.com/public//backend/libs/select2/dist/css/select2.min.css">
<!-- Custom CSS -->
<link href="https://corporatetechbd.com/public//backend/css/style.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/v5-font-face.min.css"
    integrity="sha512-DG+gORwHSOHlIRwrUl2peOlG9vcxDg8qnbI1WkCfttaERikRSgrRoDeDa1PK4uZD24IJwAeKb6TuQk+/15b66A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.4.47/css/materialdesignicons.css" />


       <style>
        .cke_notifications_area{
            display: none;
        }
    </style>

    </head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="https://corporatetechbd.com/admin">
                <!-- Logo icon -->
                <b class="logo-icon p-l-10">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->

                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                    <!-- dark Logo text -->
                    <img src="https://corporatetechbd.com/public/uploads/logo/Asset 1.png"
                        width="90%" alt="homepage" class="light-logo" />
                </span>
                <!-- Logo icon -->
                <!-- <b class="logo-icon"> -->
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <!-- <img src="../../backend/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                <!-- </b> -->
                <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto">
                <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light"
                        href="javascript:void(0)" data-sidebartype="mini-sidebar"><i
                            class="mdi mdi-menu font-24"></i></a></li>
                <!-- ============================================================== -->
                <!-- create new -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- create new -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->

            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
                <!-- ============================================================== -->
                <!-- Comment -->
                <!-- ============================================================== -->

                <li class="nav-item dropdown">
                    <a class="nav-link waves-effect waves-dark" title="Go to website" href="https://corporatetechbd.com"
                        target="_blank">
                        <div>
                            <i class="mdi mdi-home font-24"></i> Website
                        </div>
                    </a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link waves-effect waves-dark" href="https://corporatetechbd.com/admin/no_answered_question_list">
                        <div>
                            <i class="mdi mdi-bell font-24"></i>
                            <span class="badge badge-danger badge-pill">0</span>
                        </div>
                    </a>
                </li>

                <!-- ============================================================== -->
                <!-- End Comment -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Messages -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Messages -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                            src="https://corporatetechbd.com/public/backend/images/users/1.jpg" alt="user"
                            class="rounded-circle" width="31"></a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated">

                        <a class="dropdown-item" href="https://corporatetechbd.com/admin/password/change"><i
                                class="fa fa-key m-r-5 m-l-5"></i> Change Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="https://corporatetechbd.com/admin/logout"><i
                                class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>

                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>
