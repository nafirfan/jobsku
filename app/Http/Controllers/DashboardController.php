<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // show for wecome page
    public function show()
    {
        return view('welcome');
    }

    // index for dashboard page
    public function index()
    {
        return view('dashboard');
    }
}
