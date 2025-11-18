<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::with('kategori')->paginate(2);
        // dd($barang);
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|unique:barangs',
            'nama_barang' => 'required',
            'harga' => 'required|numeric',
        ]);

        Barang::create($request->all());
        return redirect()->route('barang.index')->with('success', 'barang berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kode_barang)
    {
        $barang = Barang::where('kode_barang', $kode_barang)->firstOrFail();
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $kode_barang)
    {
        $barang = Barang::where('kode_barang', $kode_barang)->firstOrFail();
        $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required|numeric',
        ]);

        $barang->update($request->only(['nama_barang', 'harga']));
        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui');
    }

    public function destroy($kode_barang)
    {
        Barang::where('kode_barang', $kode_barang)->delete();
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus');
    }

}
