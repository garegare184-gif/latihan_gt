<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IuranController extends Controller
{
    public function index()
    {
        $iuran = [
            ['nama' => 'Budi', 'bulan' => 'Januari', 'nominal' => 50000, 'status' => 'Lunas'],
            ['nama' => 'Ani', 'bulan' => 'Januari', 'nominal' => 50000, 'status' => 'Belum Lunas'],
        ];

        return view('iuran.index', compact('iuran'));
    }
}
