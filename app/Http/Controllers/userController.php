<?php

namespace App\Http\Controllers;

use App\Models\kecamatan;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function register()
    {
        $kec = kecamatan::all();
        return view('admin.admin_register', compact('kec'));
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'kecamatan_id' => 'required',
            'username' => 'required|unique:user',
            'password' => 'required',
            'konfirmasi_pass' => 'required|same:password',
        ]);

        $user = new user([
            'name' => $request->name,
            'kecamatan_id' => $request->kecamatan_id,
            'username' => $request->username,
            'password' => Hash::make($request->username),
        ]);

        $user->save();

        return redirect('/login')->with('success', 'Registrasi Berhasil, silahkan login');
    }
    

    public function login()
    {
        return view('admin.admin_login');
    }

    public function login_action(Request $request)
    {
        /* $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        } */

        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);


        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 1) {
                $request->session()->regenerate();
                return redirect()->intended('/superadmin');
            }
            if (Auth::user()->role == 2) {
                $request->session()->regenerate();
                return redirect()->intended('/admin');
            }
        }

        return back()->withErrors('password', 'username atau password salah');
    }

    public function password()
    {   
        return view('admin.ubah_pass');
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'password_lama' => 'required|current_password',
            'password_baru' => 'required|confirmed',
        ]);

        $user = user::find(Auth::id());
        $user->password = Hash::make($request->password_baru);
        $user->save();
        $request->session()->regenerate();

        return back()->with('success', 'Password berhasil dirubah');
    }

    public function logout (Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}
