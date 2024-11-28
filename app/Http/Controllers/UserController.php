<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    // Login logic
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Coba autentikasi pengguna
        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
        ])) {
            // Autentikasi berhasil, redirect ke dashboard
            return redirect()->route('dashboard.index');
        }

        // Jika gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'loginError' => 'Username atau password salah',
        ])->withInput($request->only('username'));
    }

    public function logout()
{
    Auth::logout(); // Logout pengguna
    return redirect('/')->with('success', 'Anda telah logout.'); // Redirect ke index
}

}