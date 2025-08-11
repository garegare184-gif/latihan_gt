<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iuran;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class IuranController extends Controller
{
    public function create()
    {
        // Ambil semua warga untuk ditampilkan di form
        $warga = User::where('warga', 'warga')->get();
        return view('iuran_create', compact('warga'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'nominal' => 'required|numeric',
        ]);

        Iuran::create([
            'user_id' => $validated['user_id'],
            'nominal' => $validated['nominal'],
            'petugas_id' => Auth::id(), // otomatis petugas admin yg login
        ]);

        return redirect('/home')->with('success', 'Iuran berhasil ditambahkan.');
    }
}
