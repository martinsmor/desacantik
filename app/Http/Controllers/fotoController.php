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
        $request->validate([
            "name" => "required",
            "detail" => "required",
            "file" => "required|image"
        ]);

        if ($request->hasFile("file")) {
            $filename = time().'.'.$request->file->extension();
            $request->file->move(public_path("images"), $filename);
        }

        foto::create([
            "name" => $request->name,
            "detail" => $request->detail,
            "image" => $request->filename
        ]);

        return back();
    }
}
