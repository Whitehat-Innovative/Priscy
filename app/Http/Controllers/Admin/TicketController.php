<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Route;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\User;

class TicketController extends Controller
{
    function add_ticket(Request $request)
    {
        $ticket = new Ticket();
        $ticket->route_id = $request->route_id;
        $ticket->user_id = $request->user_id;
        $ticket->seats = $request->seats;
        $ticket->amount = $request->amount;
        $ticket->status = $request->status;
        $ticket->save();
        $message = 'Item successfully added to the database!';
        return redirect()->route('your.route.name')->with('success', $message);
        return back();
    }

    function view()
    {
        return view('admin.addticketview');
    }

    function ticket()
    {
        return view('admin.viewticket');
    }

    function user()
    {
        return view('admin.viewuser');
    }
}
