<?php

namespace App\Http\Controllers;

use App\Models\DuesMember;
use App\Models\User;
use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WargaController extends Controller
{
public function index() {
    $data['user'] = Warga::all();
    return view('warga', $data);
}

public function create() {
    return view('warga_create');
}

public function edit($id) {
    $warga = Warga::findOrFail($id);
    return view('warga', compact('warga'));
}

public function store(Request $request)
{
    $request->validate([
        'username' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'alamat' => 'required|string',
        'email' => 'required|email',
        'password' => 'required|string|min:6',
    ]);

    Warga::create([
        'username' => $request->username,
        'name' => $request->name,
        'alamat' => $request->alamat,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('warga.index')->with('success', 'Warga berhasil ditambahkan!');
}



}
