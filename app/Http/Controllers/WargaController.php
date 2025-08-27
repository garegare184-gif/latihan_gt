<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> bc2ad695c0609d92750c1856b833669eeb3001c0
use App\Models\DuesMember;
use App\Models\User;
use App\Models\Warga;
use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
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
        'username' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'alamat' => 'required|string',
        'email' => 'required|email|unique:wargas,email',
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


=======
>>>>>>> bc2ad695c0609d92750c1856b833669eeb3001c0
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class WargaController extends Controller
{
<<<<<<< HEAD
public function index() {
    $data['user'] = Warga::all();
    return view('warga', $data);
=======
    public function index()
    {
        return view('warga.home'); // Sesuaikan dengan nama file blade Anda
    }
>>>>>>> abce05cdbc78c071eb932a0ae02b814f94b169dc
>>>>>>> bc2ad695c0609d92750c1856b833669eeb3001c0
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
        'username' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'alamat' => 'required|string',
        'email' => 'required|email|unique:wargas,email',
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