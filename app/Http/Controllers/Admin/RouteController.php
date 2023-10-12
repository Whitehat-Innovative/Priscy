<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Route;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class RouteController extends Controller
{

    function dashboard() {
        $routes = Route::latest()->get();
        $tickets = Ticket::latest()->get();
        $users = User::latest()->get();

        return view('admin.dashboard', compact('routes', 'tickets', 'users'));
    }


    function addroute(Request $request)
    {
        $route = new Route();
        $route->from = $request->from;
        $route->to = $request->to;
        $route->price = $request->price;
        $route->save();
        return redirect()->route('admin.route')->with(['success' => 'New route added']);
    }

    function view()
    {
        return view('admin.add_route');
        return back();
    }

    function route()
    {
        $routes = Route::get()->all();

        return view('admin.viewroute', compact('routes'));
    }
}
