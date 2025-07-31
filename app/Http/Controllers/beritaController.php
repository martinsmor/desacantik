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
        // Validasi input
        $request->validate([
            'judul' => 'required',
            'berita' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Ambil file gambar
        $file = $request->file('gambar'); // ✅ akses file yang benar

        // Buat nama file unik
        $filename = time() . '.' . $file->getClientOriginalExtension();

        // Pindahkan file ke folder public/gambar
        $file->move(public_path('gambar'), $filename);

        // Simpan data ke database
        berita::create([
            'judul' => $request->judul,
            'berita' => $request->berita,
            'gambar' => $filename,
        ]);

        return back()->with('success', 'Berita berhasil ditambahkan.');
    }



    public function listberita(Request $request)
    {
        $beritas = berita::all();
        // Mengirim data $beritas ke view
        return view('user.beritaa', compact('beritas'));
    }
}
