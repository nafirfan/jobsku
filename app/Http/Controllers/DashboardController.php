<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // show for welcome page
    public function show()
    {
        return view('home.index');
    }
}
