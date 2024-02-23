<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.beranda');
    }

    public function isustrategi(Request $request)
    {
        return view('pages.petajalan_isu');
    }

    public function visi(Request $request)
    {
        return view('pages.petajalan_visi');
    }

    public function unduh(Request $request)
    {
        return view('pages.unduh');
    }

}
