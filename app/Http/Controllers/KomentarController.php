<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;

class KomentarController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'isi' => 'required|string|max:255',
            'nama' => 'nullable|string|max:50',
        ]);

        Komentar::create([
            'isi' => $request->isi,
            'nama' => $request->nama ?? 'Pengunjung',
        ]);

        return redirect('/')->with('success', 'Komentar berhasil dikirim!');
    }

    public function index()
    {
        $komentars = Komentar::latest()->get(); // ambil 5 komentar terbaru
        return view('index', compact('komentars'));
    }

    public function komentars()
    {
        $komentars = Komentar::latest()->get();
        return view('superadmin.komentars', compact('komentars'));
    }

    public function destroy($id)
    {
        $komentars = Komentar::findOrFail($id);
        $komentars->delete();

        return redirect()->route('komentars')->with('success', 'Komentar berhasil dihapus.');
    }
}
