<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    function contact()
    {
        return view('contact');
    }

    function service()
    {
        return view('services');
    }
}
