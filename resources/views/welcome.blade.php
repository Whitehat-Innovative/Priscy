@extends('layouts.guest')
@section('slot')
    <!-- ================================
                     END HEADER AREA
            ================================= -->

    <!-- ================================
                START HERO-WRAPPER AREA
            ================================= -->
    <section class="hero-wrapper hero-wrapper7">
        <div class="hero-box">
            <div id="fullscreen-slide-contain">
                <ul class="slides-container">
                    <li><img src="/hero-bg2.jpg" alt="" /></li>
                    <li><img src="/hero--bg2.jpg" alt="" /></li>
                    <li><img src="/hero--bg3.jpg" alt="" /></li>
                </ul>
            </div>
            <!-- End background slider -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-content pb-5 text-center">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-70 pb-3">Book A Seat</h2>
                                <p class="sec__desc font-size-30 font-weight-medium">

                                </p>
                            </div>
                        </div>
                        <!-- end hero-content -->
                        <div class="search-fields-container">
                            <div class="contact-form-action">
                                <form action="{{ route('checkout') }}" method="POST" class="row">
                                    @csrf
                                    <div class="col-lg-7 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">Travelling From</label>
                                            <div class="form-group">
                                                <select name="route_id" class="form-control">
                                                    @foreach ($routes as $route)
                                                        <option value="{{ $route->id }}">{{ $route->from }} -> {{ $route->to }} ({{ $route->price }})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col-lg-3 -->
                                    <div class="col-lg-3 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">No of seats</label>
                                            <div class="form-group">
                                                <input class="form-control" type="number" name="seats"
                                                    placeholder="Enter No. of seats" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <button class="btn btn-primary">Proceed</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
    </section>
    <!-- end hero-wrapper -->
    <!-- ================================
              END HERO-WRAPPER AREA
            ================================= -->

    <!-- ================================
              START INFO AREA
            ================================= -->
    <section class="info-area padding-top-80px padding-bottom-45px">
        <div class="arrow-separator"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 responsive-column">
                    <div class="icon-box icon-layout-2 d-flex align-items-center">
                        <div class="info-icon flex-shrink-0 bg-rgb radius-round-full">
                            <img src="/bookingassets/images/browser.png" class="w-50" alt="" />
                        </div>
                        <!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Best Selection</h4>
                            <p class="info__desc">
                                We're thrilled to present a meticulously curated collection of
                                destinations.🗺️✨
                            </p>
                        </div>
                        <!-- end info-content -->
                    </div>
                    <!-- end icon-box -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="icon-box icon-layout-2 d-flex align-items-center">
                        <div class="info-icon flex-shrink-0 bg-rgb-2 radius-round-full">
                            <img src="/bookingassets/images/layout.png" class="w-50" alt="" />
                        </div>
                        <!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Best Price Guarantee</h4>
                            <p class="info__desc">
                                Discover an unmatched array of incredible deals that will
                                thrill both your inner explorer and your wallet! 🛫💰
                            </p>
                        </div>
                        <!-- end info-content -->
                    </div>
                    <!-- end icon-box -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="icon-box icon-layout-2 d-flex align-items-center">
                        <div class="info-icon flex-shrink-0 bg-rgb-3 radius-round-full">
                            <img src="/bookingassets/images/support.png" class="w-50" alt="" />
                        </div>
                        <!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">24/7 Support</h4>
                            <p class="info__desc">
                                Round-the-clock assistance is just a click away with our 24/7
                                support! 🕒🌟
                            </p>
                        </div>
                        <!-- end info-content -->
                    </div>
                    <!-- end icon-box -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end info-area -->
    <!-- ================================
              END INFO AREA
            ================================= -->

    <!-- ================================
              START TRENDING AREA
            ================================= -->

    <!-- end trending-area -->
    <!-- ================================
              END TRENDING AREA
            ================================= -->

    <!-- ================================
              START DISCOUNT AREA
            ================================= -->

    <!-- end discount-area -->
    <!-- ================================
              END DISCOUNT AREA
            ================================= -->

    <!-- ================================
                 START TESTIMONIAL AREA
            ================================= -->
    <section class="testimonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading mb-0">
                        <h2 class="sec__title curve-shape padding-bottom-30px" data-text="curvs">
                            Customers Testimonial
                        </h2>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row  -->
            <div class="row padding-top-50px">
                <div class="col-lg-12">
                    <div class="testimonial-carousel carousel-action">
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                    I can't thank this platform enough for making my trip
                                    seamless. The 24/7 support was a lifesaver when I needed to
                                    make last-minute changes. Kudos!
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="/bookingassets/images/team8.jpg" alt="testimonial image" />
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Abdul Ibrahim</h4>
                                    <span class="author__meta">Kano</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                    Booking my bus ticket was a breeze with this website. The
                                    unbeatable prices saved me a lot of money. I'll definitely
                                    be back for more adventures!
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="/bookingassets/images/team9.jpg" alt="testimonial image" />
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Emeka Okafor</h4>
                                    <span class="author__meta">Enugu</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                    My recent trip was a breeze thanks to this website. The 24/7
                                    support team assisted me promptly when I had an unexpected
                                    flight delay. I'm truly grateful.
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="/bookingassets/images/team10.jpg" alt="testimonial image" />
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Oluwafemi Adeleke</h4>
                                    <span class="author__meta">Lagos</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                    "Exploring Nigeria has never been more exciting. A wonderful experience!
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="/bookingassets/images/team8.jpg" alt="testimonial image" />
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Ibrahim Suleiman</h4>
                                    <span class="author__meta">Aba</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end testimonial-card -->
                    </div>
                    <!-- end testimonial-carousel -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end testimonial-area -->
    <!-- ================================
                 START TESTIMONIAL AREA
            ================================= -->

    <div class="section-block"></div>

    <!-- ================================
                 START TOP ACTIVITY AREA
            ================================= -->

    <!-- end top-activity-area -->
    <!-- ================================
                 START TOP ACTIVITY AREA
            ================================= -->

    <!-- ================================
              START CTA AREA
            ================================= -->
    <section class="cta-area cta-bg bg-fixed section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="sec__title text-white font-size-50 line-height-60">
                            Enjoy Your Trip <br />
                            with Discounts
                        </h2>
                    </div>
                    <!-- end section-heading -->
                    <div class="btn-box padding-top-35px">
                        <a href="#" class="theme-btn border-0">Explore Now <i
                                class="la la-arrow-right ml-1"></i></a>
                    </div>
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end cta-area -->
    <!-- ================================
              END CTA AREA
            ================================= -->

    <!-- ================================
                 START BLOG AREA
            ================================= -->

    <!-- end blog-area -->
    <!-- ================================
                 START BLOG AREA
            ================================= -->

    <!-- ================================

            ================================= -->

    <!-- ================================
                 START CLIENTLOGO AREA
            ================================= -->

    <!-- end clientlogo-area -->
    <!-- ================================
                 START CLIENTLOGO AREA
            ================================= -->


    <!-- end cta-area -->
    <!-- ================================
              END CTA AREA
@endsection
