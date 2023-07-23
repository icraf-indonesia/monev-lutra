<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $user = DB::table('users')
                ->join('stakeholders', 'users.id_stakeholder', '=', 'stakeholders.id')
                ->paginate(10);
        return view('admin.user', ['user' => $user]);
    }
}
