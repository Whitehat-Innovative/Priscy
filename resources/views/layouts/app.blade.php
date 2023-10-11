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

                                <li class="nav-item dropdown notification_dropdown">
                                    <a class="nav-link" href="javascript:void(0);" role="button"
                                        data-bs-toggle="dropdown">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M17.5 12H19C19.8284 12 20.5 12.6716 20.5 13.5C20.5 14.3284 19.8284 15 19 15H6C5.17157 15 4.5 14.3284 4.5 13.5C4.5 12.6716 5.17157 12 6 12H7.5L8.05827 6.97553C8.30975 4.71226 10.2228 3 12.5 3C14.7772 3 16.6903 4.71226 16.9417 6.97553L17.5 12Z"
                                                fill="#222B40" />
                                            <path opacity="0.3"
                                                d="M14.5 18C14.5 16.8954 13.6046 16 12.5 16C11.3954 16 10.5 16.8954 10.5 18C10.5 19.1046 11.3954 20 12.5 20C13.6046 20 14.5 19.1046 14.5 18Z"
                                                fill="#222B40" />
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <div id="DZ_W_Notification1" class="widget-media dz-scroll p-2"
                                            style="height:380px;">
                                            <ul class="timeline">
                                                <li>
                                                    <div class="timeline-panel">
                                                        <div class="media me-2">
                                                            <img alt="image" width="50"
                                                                src="/assets/images/avatar/1.jpg">
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                            <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="timeline-panel">
                                                        <div class="media me-2 media-info">KG</div>
                                                        <div class="media-body">
                                                            <h6 class="mb-1">Resport created successfully</h6>
                                                            <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <a class="all-notification" href="javascript:void(0);">See all notifications
                                            <i class="ti-arrow-end"></i></a>
                                    </div>
                                </li>


                                <li class="nav-item ps-3">
                                    <div class="dropdown header-profile2">
                                        <a class="nav-link" href="javascript:void(0);" role="button"
                                            data-bs-toggle="dropdown">
                                            <div class="header-info2 d-flex align-items-center">
                                                <div class="header-media">
                                                    <img src="{{ Auth::user()->avatar }}" alt="">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" style="">
                                            <div class="card border-0 mb-0">
                                                <div class="card-header py-2">
                                                    <div class="products">
                                                        <img src="{{ Auth::user()->avatar }}" class="avatar avatar-md"
                                                            alt="">
                                                        <div>
                                                            <h6>{{ Auth::user()->name }}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body px-0 py-2">
                                                    <a href="#"
                                                        class="dropdown-item ai-icon ">
                                                        <svg width="20" height="20" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M11.9848 15.3462C8.11714 15.3462 4.81429 15.931 4.81429 18.2729C4.81429 20.6148 8.09619 21.2205 11.9848 21.2205C15.8524 21.2205 19.1543 20.6348 19.1543 18.2938C19.1543 15.9529 15.8733 15.3462 11.9848 15.3462Z"
                                                                stroke="var(--primary)" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M11.9848 12.0059C14.5229 12.0059 16.58 9.94779 16.58 7.40969C16.58 4.8716 14.5229 2.81445 11.9848 2.81445C9.44667 2.81445 7.38857 4.8716 7.38857 7.40969C7.38 9.93922 9.42381 11.9973 11.9524 12.0059H11.9848Z"
                                                                stroke="var(--primary)" stroke-width="1.42857"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>

                                                        <span class="ms-2">Profile </span>
                                                    </a>
                                                    <a href="app-profile-2.html" class="dropdown-item ai-icon ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19"
                                                            height="19" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-pie-chart">
                                                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                                            <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                                                        </svg>

                                                        <span class="ms-2">Jobs</span><span
                                                            class="badge badge-sm badge-primary rounded-circle text-white ms-2">4</span>
                                                    </a>

                                                    <a href="email-inbox.html" class="dropdown-item ai-icon ">
                                                        <svg width="20" height="20" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M12 17.8476C17.6392 17.8476 20.2481 17.1242 20.5 14.2205C20.5 11.3188 18.6812 11.5054 18.6812 7.94511C18.6812 5.16414 16.0452 2 12 2C7.95477 2 5.31885 5.16414 5.31885 7.94511C5.31885 11.5054 3.5 11.3188 3.5 14.2205C3.75295 17.1352 6.36177 17.8476 12 17.8476Z"
                                                                stroke="var(--primary)" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M14.3888 20.8572C13.0247 22.372 10.8967 22.3899 9.51947 20.8572"
                                                                stroke="var(--primary)" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>

                                                        <span class="ms-2">Notification </span>
                                                    </a>
                                                </div>
                                                <div class="card-footer px-0 py-2">
                                                    <a href="#"
                                                        class="dropdown-item ai-icon ">
                                                        <svg width="20" height="20" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M20.8066 7.62355L20.1842 6.54346C19.6576 5.62954 18.4907 5.31426 17.5755 5.83866V5.83866C17.1399 6.09528 16.6201 6.16809 16.1307 6.04103C15.6413 5.91396 15.2226 5.59746 14.9668 5.16131C14.8023 4.88409 14.7139 4.56833 14.7105 4.24598V4.24598C14.7254 3.72916 14.5304 3.22834 14.17 2.85761C13.8096 2.48688 13.3145 2.2778 12.7975 2.27802H11.5435C11.0369 2.27801 10.5513 2.47985 10.194 2.83888C9.83666 3.19791 9.63714 3.68453 9.63958 4.19106V4.19106C9.62457 5.23686 8.77245 6.07675 7.72654 6.07664C7.40418 6.07329 7.08843 5.98488 6.8112 5.82035V5.82035C5.89603 5.29595 4.72908 5.61123 4.20251 6.52516L3.53432 7.62355C3.00838 8.53633 3.31937 9.70255 4.22997 10.2322V10.2322C4.82187 10.574 5.1865 11.2055 5.1865 11.889C5.1865 12.5725 4.82187 13.204 4.22997 13.5457V13.5457C3.32053 14.0719 3.0092 15.2353 3.53432 16.1453V16.1453L4.16589 17.2345C4.41262 17.6797 4.82657 18.0082 5.31616 18.1474C5.80575 18.2865 6.33061 18.2248 6.77459 17.976V17.976C7.21105 17.7213 7.73116 17.6515 8.21931 17.7821C8.70746 17.9128 9.12321 18.233 9.37413 18.6716C9.53867 18.9488 9.62708 19.2646 9.63043 19.5869V19.5869C9.63043 20.6435 10.4869 21.5 11.5435 21.5H12.7975C13.8505 21.5 14.7055 20.6491 14.7105 19.5961V19.5961C14.7081 19.088 14.9088 18.6 15.2681 18.2407C15.6274 17.8814 16.1154 17.6806 16.6236 17.6831C16.9451 17.6917 17.2596 17.7797 17.5389 17.9393V17.9393C18.4517 18.4653 19.6179 18.1543 20.1476 17.2437V17.2437L20.8066 16.1453C21.0617 15.7074 21.1317 15.1859 21.0012 14.6963C20.8706 14.2067 20.5502 13.7893 20.111 13.5366V13.5366C19.6717 13.2839 19.3514 12.8665 19.2208 12.3769C19.0902 11.8872 19.1602 11.3658 19.4153 10.9279C19.5812 10.6383 19.8213 10.3981 20.111 10.2322V10.2322C21.0161 9.70283 21.3264 8.54343 20.8066 7.63271V7.63271V7.62355Z"
                                                                stroke="var(--primary)" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <circle cx="12.175" cy="11.889" r="2.63616"
                                                                stroke="var(--primary)" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>

                                                        <span class="ms-2">Settings </span>
                                                    </a>
                                                    <a href="{{ route('logout') }}" class="dropdown-item ai-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" viewBox="0 0 24 24" fill="none"
                                                            stroke="var(--primary)" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                            <polyline points="16 17 21 12 16 7"></polyline>
                                                            <line x1="21" y1="12" x2="9"
                                                                y2="12"></line>
                                                        </svg>
                                                        <span class="ms-2">Logout </span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
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
