<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{
    function home()
    {
        $routes = Route::all();

        return view('welcome', compact('routes'));
    }

    function account()
    {
        if (Auth::user()->code == 8) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin.dashboard');

    }

    function contact()
    {
        return view('contact');
    }

    function service()
    {
        return view('services');
    }
}
