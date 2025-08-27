<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // =================== DASHBOARD ===================
    public function dashboard()
    {
        $warga = User::where('level','warga')->get();
        $categories = Category::all();
        $payments = Payment::with('user','category')->get();
        return view('admin.dasboard', compact('warga','categories','payments'));
    }

    // =================== WARGA ===================
    public function indexWarga()
    {
        $warga = User::where('level', 'warga')->get();
        return view('admin.warga.index', compact('warga'));
    }

    public function storeWarga(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:4',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level' => 'warga',
        ]);

        return redirect()->route('admin.warga.index')->with('success', 'Warga berhasil ditambahkan.');
    }

    public function editWarga($id)
    {
        $warga = User::where('level', 'warga')->findOrFail($id);
        return view('admin.warga.edit', compact('warga'));
    }

    public function updateWarga(Request $request, $id)
    {
        $warga = User::where('level', 'warga')->findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $id,
            'password' => 'nullable|string|min:4',
        ]);

        $warga->name = $request->name;
        $warga->username = $request->username;

        if ($request->filled('password')) {
            $warga->password = Hash::make($request->password);
        }

        $warga->save();

        return redirect()->route('admin.warga.index')->with('success', 'Data warga berhasil diperbarui.');
    }

    public function destroyWarga($id)
    {
        $warga = User::where('level', 'warga')->findOrFail($id);
        $warga->delete();

        return redirect()->route('admin.warga.index')->with('success', 'Warga berhasil dihapus.');
    }

    // =================== KATEGORI ===================
    public function indexKategori()
    {
        $categories = Category::all();
        return view('admin.kategori.index', compact('categories'));
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);
        Category::create([
            'name' => $request->name,
            'nominal' => $request->nominal ?? 0,
        ]);
        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function editKategori($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.kategori.edit', compact('category'));
    }

    public function updateKategori(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'nominal' => 'required|numeric|min:0',
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'name' => $request->name,
            'nominal' => $request->nominal,
        ]);

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil diperbarui');
    }

    public function destroyKategori($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil dihapus.');
    }

    // =================== PAYMENT ===================
    // public function indexPayment()
    // {
    //     $payments = Payment::with('user','category')->get();
    //     return view('admin.payment.index', compact('payments'));
    // }

    // public function updatePayment(Request $request, $id)
    // {
    //     $request->validate([
    //         'status' => 'required|in:sudah bayar,belum bayar',
    //     ]);

    //     $payment = Payment::findOrFail($id);
    //     $payment->status = $request->status;
    //     $payment->payment_date = $request->status === 'sudah bayar' ? now() : null;
    //     $payment->save();

    //     return redirect()->back()->with('success', 'Status pembayaran berhasil diperbarui.');
    // }

//     public function destroyPayment($id)
//     {
//         $payment = Payment::findOrFail($id);
//         $payment->delete();

//         return redirect()->back()->with('success', 'Data pembayaran berhasil dihapus.');
//     }
//     public function index()
// {
//     $payments = Payment::with(['user','category'])->get();
//     $users = User::all();
//     $categories = Category::all();
//     return view('admin.payment.index', compact('payments','users','categories'));
// }

// public function store(Request $request)
// {
//     $request->validate([
//         'user_id' => 'required',
//         'category_id' => 'required',
//         'amount' => 'required|numeric'
//     ]);

//     Payment::create([
//         'user_id' => $request->user_id,
//         'category_id' => $request->category_id,
//         'amount' => $request->amount,
//         'status' => 'Belum Bayar'
//     ]);

//     return redirect()->route('admin.pembayaran.index')->with('success','Pembayaran berhasil ditambahkan');
// }

}
