<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function data()
    {
        return response()->json([
            'vendors' => 12,
            'products' => 320,
            'orders' => 45,
            'commission' => 14350,
        ]);
    }



}
