<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita;


class beritaController extends Controller
{
    //
    public function berita(Request $request)
    {
        return view("superadmin.berita");
    }

    public function tambahberita(Request $request)
    {
        $request->validate([
            "berita" => "required"
        ]);

        berita::create([
            "berita" => $request->berita
            
        ]);

        return back();
    }
}
