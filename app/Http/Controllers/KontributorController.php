<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontributorController extends Controller
{
    public function index()
    {
        $strategi = DB::table('monev_strategies')->get();
        // $strategi = DB::table('monev_strategies')->get();
        // $strategi = DB::table('monev_strategies')->get();

        return view('kontributor', ['strategi'=>$strategi]);
    }
}
