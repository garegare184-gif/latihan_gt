<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        $warga = [
            ['nama' => 'Budi', 'alamat' => 'Jl. Mawar No.1', 'status' => 'Aktif'],
            ['nama' => 'Ani', 'alamat' => 'Jl. Melati No.5', 'status' => 'Aktif'],
            ['nama' => 'Tono', 'alamat' => 'Jl. Kenanga No.3', 'status' => 'Non-aktif'],
        ];

        return view('warga.index', compact('warga'));
    }


}
