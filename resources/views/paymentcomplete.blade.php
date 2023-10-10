@extends('layouts.guest')
@section('slot')

<!-- ================================
    START PAYMENT AREA
================================= -->
<section class="payment-area section-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-box payment-received-wrap mb-0">

                    <div class="form-content">
                        <div class="payment-received-list">
                            <div class="d-flex align-items-center">
                                <i class="la la-check icon-element flex-shrink-0 mr-3 ml-0"></i>
                                <div>
                                    <h3 class="title pb-1">Thanks!</h3>
                                    <h3 class="title">Your ticket reservation is confirmed.</h3>
                                </div>
                            </div>


                            <p><strong class="text-black mr-1 mt-6 ">Name:</strong>Chukwu Priscillia</p>
                            <p><strong class="text-black mr-1">Email:</strong>priscy@gmail.com</p>
                            <ul class="list-items list-items-3 list-items-4 py-4">
                                <li><span class="text-black font-weight-bold">Your reservation</span>2 Seats</li>
                                <li><span class="text-black font-weight-bold">Departure</span>Thu 30 Mar, 2020</li>
                                <li><span class="text-black font-weight-bold">Arrival</span>Sat 01 Jun, 2020</li>
                                <li><span class="text-black font-weight-bold">Cancellation cost</span>From now on: NGN 00</li>
                            </ul>
                            <div class="btn-box">
                                <a href="#" class="theme-btn border-0 text-white bg-7">Cancel your booking</a>
                            </div>
                        </div><!-- end card-item -->
                    </div>
                </div><!-- end payment-card -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- ================================
    END PAYMENT AREA
================================= -->

@endsection
