<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function login(Request $request)
    {
        // ini untuk login ya
        $hasil = DB::table('users')->where('nama', $request->nama)->count();
        $password = DB::table('users')->where('nama', $request->nama)->value('password');


        if ($hasil == 1) {
            if (Hash::check($request->password, $password)) {
                // Activate session_start
                session_start();
                // Set session
                $_SESSION['login'] = true;
                $_SESSION['nama'] = $request->nama;
                // id
                $_SESSION['id'] = DB::table('users')->where('nama', $request->nama)->value('id');
                $_SESSION['nama'] = DB::table('users')->where('nama', $request->nama)->value('nama');
                $_SESSION['email'] = DB::table('users')->where('nama', $request->nama)->value('email');
                return redirect('/Warnet');
            }
        } else {
            return redirect('/');
        }

    }
    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
