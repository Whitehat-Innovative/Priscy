@extends('layouts.guest')
@section('slot')
    <section class="booking-area padding-top-100px padding-bottom-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title">Booking Details</h3>
                        </div>
                        <!-- form-title-wrap -->
                        <div class="form-content">
                            <div class="contact-form-action">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-lg-12 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Full Name</label>
                                                <div class="form-group">
                                                    <span class="fa fa-user form-icon"></span>
                                                    <input class="form-control" type="text" name="text"
                                                        value="{{ Auth::user()->name }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-lg-6 -->
                                        <div class="col-lg-6 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Your Email</label>
                                                <div class="form-group">
                                                    <span class="fa fa-envelope-o form-icon"></span>
                                                    <input class="form-control" type="email" name="email"
                                                        value="{{ Auth::user()->email }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-lg-6 -->
                                        <div class="col-lg-6 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Phone Number</label>
                                                <div class="form-group">
                                                    <span class="fa fa-phone form-icon"></span>
                                                    <input class="form-control" type="text" name="text"
                                                        value="{{ Auth::user()->phone_number }}" />
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
                            <h3 class="title">Confirm Booking</h3>
                        </div>
                        <!-- end form-title-wrap -->
                        <div class="form-content">
                            <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal"
                                role="form">
                                @csrf

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="route_id" value="{{ $route->id }}">
                                        <input type="hidden" name="seats" value="{{ $seats }}">
                                        <input type="hidden" name="amount" value="{{ $price }}">
                                        <input type="hidden" name="currency" value="NGN">
                                        <input type="hidden" name="quantity" value="100">
                                        <input type="hidden" name="callback_url" value="{{ route('callback') }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </div>
                                </div>
                                <div class="card-item shadow-none radius-none mb-0">
                                    <div class="card-body p-0">
                                        <ul class="list-items list-items-2 list-items-flush">
                                            <li class="font-size-15">
                                                <span class="w-auto d-block mb-n1">
                                                    <i
                                                        class="fa fa-location mr-1 font-size-17 text-success"></i>{{ $route->from }}</span>
                                            </li>
                                            <li class="font-size-15">
                                                <span class="w-auto d-block mb-n1">
                                                    <i
                                                        class="fas fa-location mr-1 text-danger font-size-17"></i>{{ $route->to }}</span>
                                            </li>
                                        </ul>
                                        <ul class="list-items list-items-2 ">
                                            <li><span>Seats:</span>{{ $seats }}</li>
                                        </ul>
                                        <div class="section-block"></div>
                                        <ul class="list-items list-items-2 pb-3">
                                            <li><span>Total Price: </span> ₦ {{ number_format($price) }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <input type="datetime-local" required name="date_time" class="form-control mb-5">
                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                <button class="btn btn-success btn-lg btn-block" type="submit">
                                    <i class="fa fa-plus-circle fa-lg"></i> Book Now
                                </button>
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
