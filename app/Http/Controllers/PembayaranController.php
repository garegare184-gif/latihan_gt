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
            return redirect()->route('pembayaran.konfirmasi')->withErrors('Data pembayaran tidak ditemukan.');
        }

        return view('pembayaran-konfirmasi', compact('pembayaran'));
    }

}
