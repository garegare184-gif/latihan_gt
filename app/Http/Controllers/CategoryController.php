<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // Tampilkan semua kategori
    public function index()
    {
        $data = Category::all();
        return view('kategori', compact('data'));
    }

    // Form tambah kategori
    public function create()
    {
        return view('kategori_create');
    }

    // Simpan kategori baru
    public function store(Request $request)
    {
        $request->validate([
            'periode' => 'required|string|max:100',
            'nominal' => 'required'
        ]);

        Category::create([
            'periode' => $request->periode,
            'nominal' => $request->nominal,
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan');
    }

    // Form edit kategori
    public function edit($id)
    {
        $kategori = Category::findOrFail($id);
        return view('kategori_edit', compact('kategori'));
    }

    // Update kategori
    public function update(Request $request, $id)
    {
        $request->validate([
            'periode' => 'required|string|max:100',
            'nominal' => 'required'
        ]);

        $kategori = Category::findOrFail($id);
        $kategori->update([
            'periode' => $request->periode,
            'nominal' => $request->nominal,
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui');
    }


    // Hapus kategori
    public function destroy($id)
    {
        $kategori = Category::findOrFail($id);
        $kategori->delete();

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus');
    }
}
