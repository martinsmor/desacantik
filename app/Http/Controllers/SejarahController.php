<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;


use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        $sejarah = Sejarah::first();
        return view('user.sejarah', compact('sejarah'));
    } //
}
