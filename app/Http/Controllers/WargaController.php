<?php

namespace App\Http\Controllers;

use App\Models\DuesMember;
use App\Models\User;
use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class WargaController extends Controller
{
    
public function konfirmasi()
{
    $warga = Warga::all(); 
    return view('pembayaran.konfirmasi', compact('warga'));
}

public function index()
{
    $warga = Warga::all();
    return view('warga', compact('warga'));
}


public function create() {
    return view('warga_create');
}

public function edit($id) {
    $warga = Warga::findOrFail($id);
    return view('warga_edit', compact('warga'));
}

public function destroy($id)
{
    $warga = User::findOrFail($id);
    $warga->delete();

    return redirect()->route('warga.index')->with('success', 'Data berhasil dihapus!');
}



public function store(Request $request)
{
    $request->validate([
        'username' => 'required',
        'name' => 'required',
        'alamat' => 'required',
        'email' => 'required|email|unique:wargas',
        'password' => 'required|min:6',
    ]);

    Warga::create([
        'username' => $request->username,
        'name'     => $request->name,
        'alamat'   => $request->alamat,
        'email'    => $request->email,
        'password' => bcrypt($request->password), // jangan lupa di-hash
    ]);

    return redirect()->route('warga.index')->with('success', 'Warga berhasil ditambahkan');
}


    public function update(Request $request, $id)
{
    $warga = Warga::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'alamat' => 'required|string',
        'email' => 'required|email|unique:wargas,email,' . $id,
    ]);

    $warga->update([
        'name' => $request->name,
        'alamat' => $request->alamat,
        'email' => $request->email,
    ]);

    return redirect()->route('warga.index')->with('success', 'Data warga berhasil diperbarui!');
}
public function show($id)
{
    $warga = User::findOrFail($id);
    return view('warga.show', compact('warga'));
}


}