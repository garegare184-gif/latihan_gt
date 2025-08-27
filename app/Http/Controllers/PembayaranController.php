<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    

    public function showForm()
    {
        return view('pembayaran-form');
    }

    public function process(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nominal' => 'required|numeric|min:1',
        ]);

        $request->session()->put('pembayaran', [
            'nama' => $request->nama,
            'nominal' => $request->nominal,
        ]);

        return redirect()->route('pembayaran.konfirmasi');
    }

public function confirmation(Request $request)
{
    $pembayaran = $request->session()->get('pembayaran');

    if (!$pembayaran) {
        // Arahkan ke form pembayaran kalau data kosong
        return redirect()->route('pembayaran.form')->withErrors('Data pembayaran tidak ditemukan.');
    }

    return view('pembayaran-konfirmasi', compact('pembayaran'));
}
public function updateStatus(Request $request)
{
    $pembayaran = $request->session()->get('pembayaran');

    if ($pembayaran) {
        // Toggle status
        if (isset($pembayaran['status']) && $pembayaran['status'] === 'sudah') {
            $pembayaran['status'] = 'belum';
        } else {
            $pembayaran['status'] = 'sudah';
        }

        // Simpan lagi ke session
        $request->session()->put('pembayaran', $pembayaran);
    }

    return redirect()->route('pembayaran.konfirmasi');
}

}

