<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from techydevs.com/demos/trizen/html/index7.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Aug 2023 14:03:43 GMT -->

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="TechyDevs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title> Travel Bus Ticket</title>
    <!-- Favicon -->
    <link rel="icon" href="/bookingassets/images/favicon.png" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ysabeau+Infant:ital,wght@1,500&family=Ysabeau:wght@300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <!-- Template CSS Files -->
    <link rel="stylesheet" href="/bookingassets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/bookingassets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="/bookingassets/css/line-awesome.css" />
    <link rel="stylesheet" href="/bookingassets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/bookingassets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/bookingassets/css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="/bookingassets/css/daterangepicker.css" />
    <link rel="stylesheet" href="/bookingassets/css/animated-headline.css" />
    <link rel="stylesheet" href="/bookingassets/css/jquery-ui.css" />
    <link rel="stylesheet" href="/bookingassets/css/flag-icon.min.css" />
    <link rel="stylesheet" href="/bookingassets/css/style.css" />
</head>

<body>
    <!-- start cssload-loader -->
    <div class="preloader" id="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
            </svg>
        </div>
    </div>
    <!-- end cssload-loader -->

    <!-- ================================
            START HEADER AREA
================================= -->
    <header class="header-area">

        <div class="header-menu-wrapper padding-right-100px padding-left-100px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-wrapper justify-content-between">
                            <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                            <div class="logo">
                                <a href="{{ route('welcome') }}"><img src="/bookingassets/images/logo.png" alt="logo" /></a>
                                <div class="menu-toggler">
                                    <i class="la la-bars"></i>
                                    <i class="la la-times"></i>
                                </div>
                                <!-- end menu-toggler -->
                            </div>
                            <!-- end logo -->
                            <div class="main-menu-content pr-0 ml-0">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="{{ route('welcome') }}">Home </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('ourservices') }}">Services </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contactus') }}">Contact </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- end main-menu-content -->
                            <div class="nav-btn">
                                @guest
                                    <div class="header-right-action">
                                        <a href="{{ route('register') }}"
                                            class="theme-btn theme-btn-small theme-btn-transparent mr-1">Sign Up</a>
                                        <a href="{{ route('login') }}" class="theme-btn theme-btn-small">Login</a>
                                    </div>
                                @endguest
                                @auth
                                    <div class="header-right-action">
                                        <span class="mr-3"><i class="fa fa-user text-primary"></i> {{ Auth::user()->name }}</span>
                                        <a href="{{ route('tickets') }}" class="theme-btn theme-btn-small">Bookings</a>
                                        <a href="{{ route('logout') }}"
                                            class="theme-btn theme-btn-small theme-btn-transparent mr-1">Logout</a>
                                    </div>
                                @endauth

                            </div>
                            <!-- end nav-btn -->
                        </div>
                        <!-- end menu-wrapper -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end header-menu-wrapper -->
    </header>


    @yield('slot')
    <section class="footer-area section-bg padding-top-40px padding-bottom-30px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="term-box footer-item">
                        <ul class="list-items list--items d-flex align-items-center">
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Help Center</a></li>
                        </ul>
                    </div>
                </div>
                <!-- end col-lg-8 -->

                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <div class="section-block mt-4 mb-5"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <div class="footer-logo padding-bottom-30px">
                            <a href="{{ route('welcome') }}" class="foot__logo"><img src="/bookingassets/images/logo.png"
                                    alt="logo" /></a>
                        </div>
                        <!-- end logo -->
                        <p class="footer__desc">
                            Unveiling Journeys, Elevating Experiences: Your Adventure, Our
                            Commitment.
                        </p>
                        <ul class="list-items pt-3">
                            <li>
                                Port Harcourt, Rivers State<br />
                                Nigeria
                            </li>
                            <li>+234-8173550930</li>
                            <li><a href="#">trizen@yourwebsite.com</a></li>
                        </ul>
                    </div>
                    <!-- end footer-item -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">
                            Contact Us
                        </h4>
                        <ul class="list-items list--items">
                            <li><a href="{{ route('ourservices') }}">Services</a></li>
                            <li><a href="{{ route('contactus') }}">Contact</a></li>
                        </ul>
                    </div>
                    <!-- end footer-item -->
                </div>
                <!-- end col-lg-3 -->

                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">
                            Payment Methods
                        </h4>
                        <p class="footer__desc pb-3">
                            we support all payment options.
                        </p>
                        <img src="/bookingassets/images/payment-img.png" alt="" />
                    </div>
                    <!-- end footer-item -->
                </div>
                <!-- end col-lg-3 -->
            </div>
            <!-- end row -->
            <div class="section-block"></div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copy-right padding-top-30px text-center">
                        <p class="copy__desc">
                            &copy; Copyright Trizen 2020. Made with
                            <span class="la la-heart"></span> by
                            <a href="#">Fortune.py</a>
                        </p>
                    </div>
                    <!-- end copy-right -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end footer-area -->
    <!-- ================================
           START FOOTER AREA
    ================================= -->

    <!-- start back-to-top -->
    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->

    <!-- end modal-shared -->
    <div class="modal-popup">
        <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title title" id="exampleModalLongTitle">
                                Sign Up
                            </h5>
                            <p class="font-size-14">Hello! Welcome Create a New Account</p>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form-action">
                            <form method="post">
                                <div class="input-box">
                                    <label class="label-text">Name</label>
                                    <div class="form-group">
                                        <span class="la la-user form-icon"></span>
                                        <input class="form-control" type="name" name="name"
                                            placeholder="Type your username" />
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">Email Address</label>
                                    <div class="form-group">
                                        <span class="la la-envelope form-icon"></span>
                                        <input class="form-control" type="email" name="email"
                                            placeholder="Type your email" />
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">Password</label>
                                    <div class="form-group">
                                        <span class="la la-lock form-icon"></span>
                                        <input class="form-control" type="password" name="password"
                                            placeholder="Type password" />
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">Repeat Password</label>
                                    <div class="form-group">
                                        <span class="la la-lock form-icon"></span>
                                        <input class="form-control" type="password" name="password"
                                            placeholder="Type again password" />
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="btn-box pt-3 pb-4">
                                    <button type="submit" class="theme-btn w-100">
                                        Register Account
                                    </button>
                                </div>
                                <div class="action-box text-center">
                                    <p class="font-size-14">Or Sign up Using</p>
                                    <ul class="social-profile py-3">
                                        <li>
                                            <a href="#" class="bg-5 text-white"><i
                                                    class="lab la-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="bg-6 text-white"><i
                                                    class="lab la-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="bg-7 text-white"><i
                                                    class="lab la-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="bg-5 text-white"><i
                                                    class="lab la-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                        <!-- end contact-form-action -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal-popup -->

    <!-- end modal-shared -->
    <div class="modal-popup">
        <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title title" id="exampleModalLongTitle2">
                                Login
                            </h5>
                            <p class="font-size-14">Hello! Welcome to your account</p>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form-action">
                            <form action="{{ route('login') }}" method="post">@csrf
                                <div class="input-box">
                                    <label class="label-text">Name</label>
                                    <div class="form-group">
                                        <span class="la la-user form-icon"></span>
                                        <input class="form-control" type="text" name="name"
                                            placeholder="Type your name" />
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">Password</label>
                                    <div class="form-group mb-2">
                                        <span class="la la-lock form-icon"></span>
                                        <input class="form-control" type="password" name="password"
                                            placeholder="Type your password" />
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="custom-checkbox mb-0">
                                            <input type="checkbox" id="rememberchb" />
                                            <label for="rememberchb">Remember me</label>
                                        </div>
                                        <p class="forgot-password">
                                            <a href="recover.html">Forgot Password?</a>
                                        </p>
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="btn-box pt-3 pb-4">
                                    <button type="submit" class="theme-btn w-100">
                                        Login Account
                                    </button>
                                </div>
                                <div class="action-box text-center">
                                    <p class="font-size-14">Or Login Using</p>
                                    <ul class="social-profile py-3">
                                        <li>
                                            <a href="#" class="bg-5 text-white"><i
                                                    class="lab la-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="bg-6 text-white"><i
                                                    class="lab la-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="bg-7 text-white"><i
                                                    class="lab la-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="bg-5 text-white"><i
                                                    class="lab la-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                        <!-- end contact-form-action -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal-popup -->

    <!-- Template JS Files -->
    <script src="/bookingassets/js/jquery-3.4.1.min.js"></script>
    <script src="/bookingassets/js/jquery-ui.js"></script>
    <script src="/bookingassets/js/popper.min.js"></script>
    <script src="/bookingassets/js/bootstrap.min.js"></script>
    <script src="/bookingassets/js/bootstrap-select.min.js"></script>
    <script src="/bookingassets/js/moment.min.js"></script>
    <script src="/bookingassets/js/daterangepicker.js"></script>
    <script src="/bookingassets/js/owl.carousel.min.js"></script>
    <script src="/bookingassets/js/jquery.fancybox.min.js"></script>
    <script src="/bookingassets/js/jquery.countTo.min.js"></script>
    <script src="/bookingassets/js/animated-headline.js"></script>
    <script src="/bookingassets/js/jquery.ripples-min.js"></script>
    <script src="/bookingassets/js/quantity-input.js"></script>
    <script src="/bookingassets/js/jquery.superslides.min.js"></script>
    <script src="/bookingassets/js/superslider-script.js"></script>
    <script src="/bookingassets/js/main.js"></script>
</body>

</html>
