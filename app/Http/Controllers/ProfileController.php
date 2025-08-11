<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Halaman profil warga
    public function index()
    {
        // Ambil user yang sedang login
        $warga = Auth::user();

        // Kirim ke view profil
        return view('datawarga.profil', compact('warga'));
    }
}


