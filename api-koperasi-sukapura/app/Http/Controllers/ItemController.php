<?php

namespace App\Http\Controllers;

use App\Models\ItemModel;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // Menampilkan semua item
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    // Menyimpan item baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'jumlah' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        Item::create($validatedData);

        return redirect()->route('items.index')->with('success', 'Item berhasil ditambahkan.');
    }
}
