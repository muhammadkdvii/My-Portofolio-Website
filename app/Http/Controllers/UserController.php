<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

      
        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
        ])) {
          
            return redirect()->route('dashboard.index');
        }

       
        return back()->withErrors([
            'loginError' => 'Username atau password salah',
        ])->withInput($request->only('username'));
    }

    public function logout()
{
    Auth::logout(); 
    return redirect('/')->with('success', 'Anda telah logout.'); 
}

}