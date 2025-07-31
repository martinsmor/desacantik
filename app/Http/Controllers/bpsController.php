<?php

namespace App\Http\Controllers;

use App\Models\blok7;
use App\Models\warga;
use App\Models\provinsi;
use App\Models\kabupaten;
use App\Models\bansos;
use App\Models\user;
use App\Models\Profil;
use App\Models\kecamatan;


class bpsController extends Controller
{
    public function index()
    { {
            $profils = Profil::all(); // atau sesuaikan query jika perlu
            return view('superadmin.dashboardsa', compact('profils'));
        }
    }


    public function kelola()
    {
        $user = user::all();

        $kecamatan = kecamatan::with('user')->get();

        return view('superadmin.kelolapengguna', compact('user'));
    }
}
