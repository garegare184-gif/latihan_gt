<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class WargaController extends Controller
{
    public function index()
    {
        return view('warga.home'); // Sesuaikan dengan nama file blade Anda
    }
}
