<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.01_tentang');
    }

    public function petaJalan(Request $request)
    {
        return view('pages.02_petajalan');
    }

    public function isu(Request $request)
    {
        return view('pages.02_isu');
    }

    public function tentangRoadMap(Request $request)
    {
        return view('pages.02_aboutroadmap');
    }

    public function pendekatan(Request $request)
    {
        return view('pages.02_pendekatan');
    }

}
