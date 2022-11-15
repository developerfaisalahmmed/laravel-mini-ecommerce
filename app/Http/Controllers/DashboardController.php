<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:dashboard');
    }

    public function index(){
        return view('backend.dashboard.dashboard');
    }
}
