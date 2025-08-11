<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Pastikan hanya user yang login yang bisa akses hom
    }

    /**
     * Tampilkan halaman home
     */
    public function index()
    {
        return view('home'); // resources/views/home.blade.php
    }
}
