<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // supaya halaman home hanya bisa diakses user login

    public function index()
    {
        // kirim data user ke view home.blade.php
        return view('home', [
            'user' => Auth::user()
        ]);
    }
}
