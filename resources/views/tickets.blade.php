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
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>From</th>
                                        <th>Destination</th>
                                        <th>Seats</th>
                                        <th>Total</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tickets as $ticket)
                                        <tr>
                                            <td>{{ $ticket->reference }}</td>
                                            <td>{{ $ticket->route->from }}</td>
                                            <td>{{ $ticket->route->to }}</td>
                                            <td>{{ $ticket->seats }}</td>
                                            <td>{{ number_format($ticket->amount) }}</td>
                                            <td>{{ $ticket->created_at->format('d M Y h:ia') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
