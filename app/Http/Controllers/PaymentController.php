<?php
namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with('user')->latest()->get();
        return view('payment.index', compact('payments'));
    }

    public function create()
    {
        $users = User::all();
        return view('payment.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'periode' => 'required|string',
            'nominal' => 'required|numeric',
        ]);

        Payment::create([
            'user_id' => $request->user_id,
            'periode' => $request->periode,
            'nominal' => $request->nominal,
            'status' => 'sudah_bayar',
        ]);

        return redirect()->route('payment.index')->with('success', 'Pembayaran berhasil disimpan.');
    }

    public function toggleStatus($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->status = $payment->status === 'sudah_bayar' ? 'belum_bayar' : 'sudah_bayar';
        $payment->save();

        return redirect()->route('payment.index')->with('success', 'Status pembayaran diperbarui.');
    }
}
