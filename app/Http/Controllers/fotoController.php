<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\foto;


class fotoController extends Controller
{
    public function create(Request $request)
    {
        return view("superadmin.createfoto");
    }

    public function galeri(Request $request)
    {
        // Validasi input
        $request->validate([
            "name" => "required",
            "detail" => "required",
            "file" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048", // bisa tambahkan lebih banyak format
        ]);

        // Cek jika file diupload
        if ($request->hasFile('file')) {
            // Ambil file yang di-upload
            $file = $request->file('file');

            // Buat nama file unik
            $filename = time() . '.' . $file->getClientOriginalExtension();

            // Pindahkan file ke folder 'public/images'
            $file->move(public_path('images'), $filename);
        }

        // Simpan data ke database
        foto::create([
            "name" => $request->name,
            "detail" => $request->detail,
            "image" => $filename, // Gunakan variabel $filename
        ]);

        return back()->with('success', 'Foto berhasil ditambahkan.');
    }

    public function galerifoto(Request $request)
    {
        $fotos = foto::all();
        // Mengirim data $beritas ke view
        return view('user.foto', compact('fotos'));
    }
}
