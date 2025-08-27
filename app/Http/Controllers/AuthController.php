<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
=======

class AuthController extends Controller
{
<<<<<<< HEAD
    //
}
=======
    public function showLoginForm()
>>>>>>> bc2ad695c0609d92750c1856b833669eeb3001c0
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->level == 'admin') {   
                return redirect()->route('admin.dasboard');
            }
            return redirect()->route('warga.dashboard');
        }

        return back()->withErrors(['username' => 'Username atau password salah'])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
<<<<<<< HEAD
}
=======
}

>>>>>>> abce05cdbc78c071eb932a0ae02b814f94b169dc
>>>>>>> bc2ad695c0609d92750c1856b833669eeb3001c0
