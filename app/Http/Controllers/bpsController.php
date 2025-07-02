<?php

namespace App\Http\Controllers;

use App\Models\blok7;
use App\Models\warga;
use App\Models\provinsi;
use App\Models\kabupaten;
use App\Models\bansos;
use App\Models\kecamatan;
use App\Models\user;
use Illuminate\Http\Request;

class bpsController extends Controller
{
    public function index()
    {
        return view('superadmin.dashboardsa', [
            'warga' => warga::latest()->get()
        ]);
    }

    
    public function kelola()
    {
        $user = user::all();

        $kecamatan = kecamatan::with('user')->get();

        return view('superadmin.kelolapengguna', compact('user'));
    }
    
}
