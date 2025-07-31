<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('user.contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Simpan ke database
        Contact::create($request->all());

        // Kirim email
        Mail::raw($request->message, function ($mail) use ($request) {
            $mail->from($request->email, $request->name);
            $mail->to('koranojayasp2@gmail.com') // ganti dengan email tujuan
                ->subject($request->subject);
        });

        return back()->with('success', 'Pesan berhasil dikirim.');
    }
}
