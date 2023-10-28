<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Route;
use App\Models\Seat;
use App\Models\Ticket;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Facades\Paystack;

class PaymentController extends Controller
{

    function tickets() {
        $tickets = Auth::user()->tickets;

        return view('tickets', compact('tickets'));
    }
    public function redirectToGateway(Request $request)
    {
        $time = str_replace('T', ' ', $request->date_time);
        $ticket = Ticket::create([
            'amount' => $request->amount,
            'status' => 'pending',
            'seats' => $request->seats,
            'user_id' => Auth::user()->id,
            'route_id' => $request->route_id,
            'reference' => $request->reference,
            'date_time' => $time,
        ]);

        try {
            return Paystack::getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['error' => 'The paystack token has expired. Please refresh the page and try again.']);
        }
    }

    public function handleGatewayCallback(Ticket $ticket)
    {
        $paymentDetails = \Paystack::getPaymentData();

        $reference = $paymentDetails['data']['reference'];
        $ticket = Ticket::where('reference', $reference)->first();
        $ticket->status = 'success';
        $ticket->save();

        $seats = $ticket->route->seats()->where('status', 'free')->take($ticket->seats)->get();
        foreach ($seats as $s) {
            $s->ticket_id = $ticket->id;
            $s->save();
        }

        return redirect()->route('completepay', $ticket->id)->with(['success' => 'Booking successful']);
    }



    function checkout(Request $request)
    {
        $request->validate([
            'route_id' => 'required',
            'seats' => 'required'
        ]);


        $route = Route::find($request->route_id);

        $free_space = $route->seats()->where('status', 'free')->count();
        if ($free_space < $request->seats) {
            return back()->with(['error' => "Only $free_space seats left"]);
        }

        $seats = $request->seats;
        $price = $seats * $route->price;

        return view('checkout', compact('route', 'seats', 'price'));
    }

    function complete($id)
    {
        $ticket = Ticket::find($id);

        return view('paymentcomplete', compact('ticket'));
    }
}
