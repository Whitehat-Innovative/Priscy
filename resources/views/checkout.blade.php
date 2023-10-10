@extends('layouts.guest')
@section('slot')
    <section class="booking-area padding-top-100px padding-bottom-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title">Booking Submission</h3>
                        </div>
                        <!-- form-title-wrap -->
                        <div class="form-content">
                            <div class="contact-form-action">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-lg-6 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">First Name</label>
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input class="form-control" type="text" name="text"
                                                        placeholder="First name" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-lg-6 -->
                                        <div class="col-lg-6 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Last Name</label>
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input class="form-control" type="text" name="text"
                                                        placeholder="Last name" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-lg-6 -->
                                        <div class="col-lg-6 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Your Email</label>
                                                <div class="form-group">
                                                    <span class="la la-envelope-o form-icon"></span>
                                                    <input class="form-control" type="email" name="email"
                                                        placeholder="Email address" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-lg-6 -->
                                        <div class="col-lg-6 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Phone Number</label>
                                                <div class="form-group">
                                                    <span class="la la-phone form-icon"></span>
                                                    <input class="form-control" type="text" name="text"
                                                        placeholder="Phone Number" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-lg-6 -->
                                    </div>
                                </form>
                            </div>
                            <!-- end contact-form-action -->
                        </div>
                        <!-- end form-content -->
                    </div>
                    <!-- end form-box -->
                </div>
                <!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="form-box booking-detail-form">
                        <div class="form-title-wrap">
                            <h3 class="title">Your Booking</h3>
                        </div>
                        <!-- end form-title-wrap -->
                        <div class="form-content">
                            <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal"
                                role="form">
                                @csrf <!-- Use Laravel's CSRF protection -->

                                <div class="row" style="margin-bottom: 40px;">
                                    <div class="col-md-8 col-md-offset-2">
                                        <!-- Hidden fields for payment -->
                                        <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                        {{-- <input type="hidden" name="route_id" value="{{ $route->id }}"> --}}

                                        <input type="hidden" name="seats" value="">
                                        <input type="hidden" name="currency" value="NGN">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <!-- Add more hidden fields as needed -->
                                    </div>
                                </div>
                                @foreach ($routes as $route)
                                    <div class="card-item shadow-none radius-none mb-0">
                                        <div class="card-img pb-4">
                                            <a href="room-details.html" class="d-block">
                                                <img src="/bookingassets/images/img5.jpg" alt="room-img" />
                                            </a>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between"></div>
                                            <div class="section-block"></div>
                                            <ul class="list-items list-items-2 list-items-flush py-2">
                                                <li class="font-size-15">
                                                    <span class="w-auto d-block mb-n1"><i
                                                            class="la la-calendar mr-1 font-size-17"></i>{{ $route->from }}</span>
                                                </li>
                                                <li class="font-size-15">
                                                    <span class="w-auto d-block mb-n1"><i
                                                            class="la la-calendar mr-1 font-size-17"></i>{{ $route->to }}</span>
                                                </li>
                                            </ul>
                                            <h3 class="card-title pb-3">Details</h3>
                                            <div class="section-block"></div>
                                            <ul class="list-items list-items-2 py-3">
                                                <li><span>Date:</span>{{ $route->created_at->format('d M y h:ia') }}</li>
                                            </ul>
                                            <div class="section-block"></div>
                                            <ul class="list-items list-items-2 pt-3">
                                                <li><span>Total Price: </span> ₦ {{ $route->price }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                <p>
                                    <button class="btn btn-success btn-lg btn-block" type="submit">
                                        <i class="fa fa-plus-circle fa-lg"></i> Book Now
                                    </button>
                                </p>
                            </form>
                        </div>
                        <!-- end form-content -->
                    </div>
                    <!-- end form-box -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
@endsection
