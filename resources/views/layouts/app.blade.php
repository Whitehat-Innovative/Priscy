<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from yashadmin.dexignzone.com/xhtml/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 22:08:06 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta property="og:image"
        content="https://yashadmin.dexignzone.com/yashadmin.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">
    <link href="/css/app.css" rel="stylesheet">

    <!-- PAGE TITLE HERE -->
    <title>{{ $title ?? 'Dashboard' }} {{ env('APP_NAME') }}</title>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="/assets/images/favicon.png">
    <link href="/assets/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css" rel="stylesheet">

    <link href="/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="/assets/jqmap/css.css" rel="stylesheet">

    <!-- tagify-css -->

    <!-- Style css -->
    <link href="/assets/css/style.css?v=2" rel="stylesheet">

    <style>
        .swal-button {
            height: 40px;
            padding: 9px 20px;
            border: 1px solid #4440B4;
            background: #4440B4;
            color: #fff;
            border-radius: 5px;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            display: inline-block;
        }

        .swal-button:hover {
            background: #4440B4;
            color: #fff !important;
            background-image: -webkit-linear-gradient(left, #4440B4, #4440B4);
            background-image: linear-gradient(to right, #4440B4, #4440B4);
        }

        .swal-text {
            text-align: center;
        }
    </style>
</head>

<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black"
    data-headerbg="color_1">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div>
            <h5>Loading. . .</h5>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ route('dashboard') }}" class="brand-logo">
                <h3 class="text-white">{{ env('APP_NAME') }}</h3>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line">
                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.7468 5.58925C11.0722 5.26381 11.0722 4.73617 10.7468 4.41073C10.4213 4.0853 9.89369 4.0853 9.56826 4.41073L4.56826 9.41073C4.25277 9.72622 4.24174 10.2342 4.54322 10.5631L9.12655 15.5631C9.43754 15.9024 9.96468 15.9253 10.3039 15.6143C10.6432 15.3033 10.6661 14.7762 10.3551 14.4369L6.31096 10.0251L10.7468 5.58925Z"
                                fill="#452B90" />
                            <path opacity="0.3"
                                d="M16.5801 5.58924C16.9056 5.26381 16.9056 4.73617 16.5801 4.41073C16.2547 4.0853 15.727 4.0853 15.4016 4.41073L10.4016 9.41073C10.0861 9.72622 10.0751 10.2342 10.3766 10.5631L14.9599 15.5631C15.2709 15.9024 15.798 15.9253 16.1373 15.6143C16.4766 15.3033 16.4995 14.7762 16.1885 14.4369L12.1443 10.0251L16.5801 5.58924Z"
                                fill="#452B90" />
                        </svg>
                    </span>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                {{ $title ?? 'Dashboard' }}
                            </div>
                        </div>
                        <div class="header-right d-flex align-items-center">
                            <ul class="navbar-nav">
                                <li class="nav-item ps-3">
                                    <div class="dropdown header-profile2">
                                        <a class="nav-link" href="javascript:void(0);" role="button"
                                            data-bs-toggle="dropdown">
                                            <div class="header-info2 d-flex align-items-center">
                                                <div class="header-media">
                                                    <h6>{{ Auth::user()->name }}</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a href="{{ route('admin.dashboard') }}" class="active">
                            <div class="menu-icon me-2">
                                <span class="ti-dashboard"></span>
                            </div>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a href="{{ route('admin.routeview') }}" class="">
                            <div class="menu-icon me-2">
                                <span class="ti-map"></span>
                            </div>
                            <span class="nav-text">Add New Routes</span>
                        </a>
                    </li>
                    <li><a href="{{ route('admin.route') }}" class="">
                            <div class="menu-icon me-2">
                                <span class="ti-briefcase"></span>
                            </div>
                            <span class="nav-text">Uploaded Routes</span>
                        </a>
                    </li>
                    <li><a href="{{ route('logout') }}" class="">
                            <div class="menu-icon me-2">
                                <span class="ti-power-off"></span>
                            </div>
                            <span class="nav-text">Logout</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div id="app">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
    <!-- Vertically centered modal -->
    <!--**********************************
            Content body end
        ***********************************-->

    <!--**********************************
            Footer start
        ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Developed by <a href="#">Priscy</a> 2023</p>
        </div>
    </div>
    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="/assets/vendor/global/global.min.js"></script>
    <script src="/assets/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    {{-- <script src="/assets/vendor/apexchart/apexchart.js"></script> --}}

    <script src="/assets/vendor/peity/jquery.peity.min.js"></script>
    <!-- Dashboard 1 -->
    <script src="/assets/js/dashboard/dashboard-2.js"></script>

    <script src="/assets/vendor/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="/assets/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js"></script>
    <script src="/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>


    <script src="/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/assets/vendor/datatables/js/dataTables.buttons.min.js"></script>
    <script src="/assets/vendor/datatables/js/buttons.html5.min.js"></script>
    <script src="/assets/vendor/datatables/js/jszip.min.js"></script>
    <script src="/assets/js/plugins-init/datatables.init.js"></script>

    <!-- Apex Chart -->

    <script src="/assets/js/custom.js"></script>
    <script src="/assets/js/deznav-init.js"></script>
    <script src="/assets/js/demo.js"></script>
    {{-- <script src="/assets/js/styleSwitcher.js"></script> --}}
    <script src="/js/app.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @if (session()->has('success'))
        <script>
            swal({
                title: "Good job!",
                text: "{{ session()->get('success') }}",
                icon: "success",
                button: "Great",
            });
        </script>
    @endif

    @if (session()->has('error'))
        <script>
            swal({
                title: "Ooops!",
                text: "{{ session()->get('error') }}",
                icon: "error",
                button: "OK",
            });
        </script>
    @endif

    @php
        $err_msg = '';
        foreach ($errors->all() as $err) {
            $err_msg .= $err . '. ';
            if (strlen(trim($err_msg)) > 0) {
                echo '
                    <script>
                        swal({
                            title: "Ooops!",
                            text: "'.$err_msg .'",
                            icon: "error",
                            button: "OK",
                        });
                    </script>
                ';
            }
        }
    @endphp

</body>

</html>
