<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.01_tentang');
    }

    public function isustrategi(Request $request)
    {
        return view('pages.02_isustrategis');
    }

    public function visi(Request $request)
    {
        return view('pages.02_visi');
    }

}
