<?php

namespace App\Http\Controllers;

use App\Models\desa_kelurahan;
use Illuminate\Http\Request;
use App\Models\warga;
use App\Models\provinsi;
use App\Models\kabupaten;
use App\Models\kecamatan;
use App\Models\Profil;
use Yajra\DataTables\DataTables;

class superadminController extends Controller
{
    public function index()
    { {
            $profils = Profil::all(); // atau sesuaikan query jika perlu
            return view('superadmin.dashboardsa', compact('profils'));
        }
    }

    public function beruksa()
    {
        $warga =  warga::with(
            'provinsi',
            'kabupaten',
            'kecamatan',
            'desa_kelurahan',
            /*      'desa_kelurahan',
         'jenislahan',
        'klasifikasi',
        'hasilcacah',
        'kepemilikan_a',
        'kepemilikan_b',
        'jenislantai',
        'jenisdinding',
        'kondisi',
        'atap',
        'sumberminum',
        'perolehminum',
        'penerangan',
        'daya',
        'bahanmasak',
        'fasilitasmasak',
        'kloset',
        'tpa',*/
        )->get();

        $provinsi = provinsi::with('warga')->get();
        $kabupaten = kabupaten::with('warga')->get();
        $kecamatan = kecamatan::with('warga')->get();
        $desa_kel = desa_kelurahan::with('warga')->get();
        /*   $desa_kel = desa_kelurahan::with('warga')->get();
        $jenislahan = provinsi::with('warga')->get();
        $klasifikasi = klasifikasi::with('warga')->get();
        $jenislintang = jenislintang::with('warga')->get();
        $hasilcacah = hasilcacah::with('warga')->get();
        $kepemilikan_a = kepemilikan_a::with('warga')->get();
        $kepemilikan_b = kepemilikan_b::with('warga')->get();
        $jenislantai = jenislantai::with('warga')->get();
        $jenisdinding = jenisdinding::with('warga')->get();
        $kondisi = kondisi::with('warga')->get();
        $atap = jenisatap::with('warga')->get();
        $sumberminum = sumberminum::with('warga')->get();
        $perolehminum = perolehminum::with('warga')->get();
        $penerangan = sumberpenerangan::with('warga')->get();
        $daya = daya::with('warga')->get();
        $bahanmasak = bahanbakarmasak::with('warga')->get();
        $fasilitasmasak = fasilitasmasak::with('warga')->get();
        $kloset = kloset::with('warga')->get();
        $tpa = tpa::with('warga')->get(); */

        $warga = warga::limit(20)->get();
        return view(
            'superadmin.desaberuk_sa',
            compact(
                'warga',
                'provinsi',
                'kabupaten',
                'kecamatan',
                /*         'desa_kel',
                'klasifikasi',
                 'jenislintang',
                 'hasilcacah',
                 'kepemilikan_a',
                 'kepemilikan_b',
                 'jenislantai',
                 'jenisdinding',
                 'kondisi',
                 'atap',
                 'sumberminum',
                 'perolehminum',
                 'penerangan',
                 'daya',
                 'bahanmasak',
                 'fasilitasmasak',
                 'kloset',
                 'tpa', */
            )
        );
    }

    public function sambirejosa()
    {
        $warga =  warga::with(
            'provinsi',
            'kabupaten',
            'kecamatan',
            /*      'desa_kelurahan',
         'jenislahan',
        'klasifikasi',
        'hasilcacah',
        'kepemilikan_a',
        'kepemilikan_b',
        'jenislantai',
        'jenisdinding',
        'kondisi',
        'atap',
        'sumberminum',
        'perolehminum',
        'penerangan',
        'daya',
        'bahanmasak',
        'fasilitasmasak',
        'kloset',
        'tpa',*/
        )->get();

        $provinsi = provinsi::with('warga')->get();
        $kabupaten = kabupaten::with('warga')->get();
        $kecamatan = kecamatan::with('warga')->get();
        /*   $desa_kel = desa_kelurahan::with('warga')->get();
        $jenislahan = provinsi::with('warga')->get();
        $klasifikasi = klasifikasi::with('warga')->get();
        $jenislintang = jenislintang::with('warga')->get();
        $hasilcacah = hasilcacah::with('warga')->get();
        $kepemilikan_a = kepemilikan_a::with('warga')->get();
        $kepemilikan_b = kepemilikan_b::with('warga')->get();
        $jenislantai = jenislantai::with('warga')->get();
        $jenisdinding = jenisdinding::with('warga')->get();
        $kondisi = kondisi::with('warga')->get();
        $atap = jenisatap::with('warga')->get();
        $sumberminum = sumberminum::with('warga')->get();
        $perolehminum = perolehminum::with('warga')->get();
        $penerangan = sumberpenerangan::with('warga')->get();
        $daya = daya::with('warga')->get();
        $bahanmasak = bahanbakarmasak::with('warga')->get();
        $fasilitasmasak = fasilitasmasak::with('warga')->get();
        $kloset = kloset::with('warga')->get();
        $tpa = tpa::with('warga')->get(); */

        $warga = warga::limit(20)->get();
        return view(
            'superadmin.desasambirejo_sa',
            compact(
                'warga',
                'provinsi',
                'kabupaten',
                'kecamatan',
                /*         'desa_kel',
                'klasifikasi',
                 'jenislintang',
                 'hasilcacah',
                 'kepemilikan_a',
                 'kepemilikan_b',
                 'jenislantai',
                 'jenisdinding',
                 'kondisi',
                 'atap',
                 'sumberminum',
                 'perolehminum',
                 'penerangan',
                 'daya',
                 'bahanmasak',
                 'fasilitasmasak',
                 'kloset',
                 'tpa', */
            )
        );
    }

    public function json()
    {
        return DataTables::of(warga::limit(20))->make(true);
    }
}
