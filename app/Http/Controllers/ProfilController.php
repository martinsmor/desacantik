<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\Pertanahan;


use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $profildesa = Profil::all()->groupBy(['kategori', 'sub_kategori']);
        return view('user.profildesa', compact('profildesa'));
    }

    public function index2()
    {
        $pertanahan = Profil::all()->groupBy(['kategori', 'sub_kategori']);
        return view('user.pertanahan', compact('pertanahan'));
    }

    public function index3()
    {
        $pembangunan = Profil::all()->groupBy(['kategori', 'sub_kategori']);
        return view('user.pembangunan', compact('pembangunan'));
    }

    public function index4()
    {
        $penduduk = Profil::all()->groupBy(['kategori', 'sub_kategori']);
        return view('user.penduduk', compact('penduduk'));
    }

    public function profil(Request $request)
    {
        return view("superadmin.profil-desa");
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'sub_kategori' => 'required',
            'uraian' => 'required',
            'jumlah' => 'nullable|numeric',
        ]);

        $existing = Profil::where('uraian', $request->uraian)->first();

        if ($existing) {
            // Update jumlah jika data sudah ada
            $existing->update([
                'kategori' => $request->kategori,
                'sub_kategori' => $request->sub_kategori,
                'jumlah' => $request->jumlah,
            ]);
        } else {
            // Simpan data baru jika belum ada
            Profil::create([
                'kategori' => $request->kategori,
                'sub_kategori' => $request->sub_kategori,
                'uraian' => $request->uraian,
                'jumlah' => $request->jumlah,
            ]);
        }

        return redirect()->route('profil-desa.profil')->with('success', 'Data berhasil ditambahkan.');
    }

    // public function store2(Request $request)
    // {
    //     $request->validate([
    //         'kategori' => 'required',
    //         'sub_kategori' => 'required',
    //         'uraian' => 'required',
    //         'jumlah' => 'nullable|numeric',
    //     ]);

    //     $existing = Pertanahan::where('uraian', $request->uraian)->first();

    //     if ($existing) {
    //         // Update jumlah jika data sudah ada
    //         $existing->update([
    //             'kategori' => $request->kategori,
    //             'sub_kategori' => $request->sub_kategori,
    //             'jumlah' => $request->jumlah,
    //         ]);
    //     } else {
    //         // Simpan data baru jika belum ada
    //         Pertanahan::create([
    //             'kategori' => $request->kategori,
    //             'sub_kategori' => $request->sub_kategori,
    //             'uraian' => $request->uraian,
    //             'jumlah' => $request->jumlah,
    //         ]);
    //     }

    //     return redirect()->route('profil-desa.profils2')->with('success', 'Data berhasil ditambahkan.');
    // }
}
