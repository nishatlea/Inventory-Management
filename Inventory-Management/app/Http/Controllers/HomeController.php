<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showView()
    {
        // You can pass data to the view using an associative array as the second argument

        // Return a view with or without data
        return view('your_view_name');
    }
}
