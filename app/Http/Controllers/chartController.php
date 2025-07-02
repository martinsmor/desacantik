<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chartController extends Controller
{
    public function piechart()
    {
        return view('admin.dashboard');
    }

    public function piechartuser()
    {
        return view('user.kec_manimeri');
    }
}
