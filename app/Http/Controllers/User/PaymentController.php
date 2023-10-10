<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Route;
use App\Models\Ticket;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Facades\Paystack;

class PaymentController extends Controller
{

public function redirectToGateway(Request $request, Ticket $ticket)
{
    // dd($request);
    
    $ticket = Ticket::create([
        
        'amount' => $request->amount,
        'status' => true,
        'seats' => $request->seats,
        'user_id' => $request->user_id,
        'route_id' => $request->route_id,
        'reference' => $request->reference,

    ]);

    try {
        return Paystack::getAuthorizationUrl()->redirectNow();
    } catch (\Exception $e) {
        return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
    }
}

public function handleGatewayCallback(Ticket $ticket)
{
    $paymentDetails = \Paystack::getPaymentData();

    $reference = $paymentDetails['data']['reference'];
    $ticket = Ticket::where('reference', $reference)->first();
    $ticket->status = 'success';

    Alert::success('Success', 'enrolled Successfully');
    $ticket->save();
    return redirect()->route('completepay');
}



    function check()
    {
        $routes = Route::all();
        return view('checkout', compact('routes'));
        return back();
    }

    function complete()
    {
        return view('paymentcomplete');
    }
}
