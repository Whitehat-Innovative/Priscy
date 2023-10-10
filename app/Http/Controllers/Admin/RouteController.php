<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{



    function addroute(Request $request)
    {
        $route = new Route();
        $route->from = $request->from;
        $route->to = $request->to;
        $route->price = $request->price;
        $route->save();
        return back();
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
