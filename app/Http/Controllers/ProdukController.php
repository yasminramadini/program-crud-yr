<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        return view('dashboard', ['produk' => Produk::latest()->get()]);
    }

    public function create()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|min:3|unique:produk',
            'stok' => 'integer|required|min:1',
            'harga' => 'integer|required|min:1',
            'deskripsi' => 'required|min:10'
        ]);

        Produk::create([
            'nama' => $request->nama,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function show(Produk $produk)
    {
        return view('detail', ['produk' => $produk]);
    }

    public function edit(Produk $produk)
    {
        return view('edit', ['produk' => $produk]);
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        $validation = [];

        if ($request->nama === $produk->nama) {
            $validation = [
                'nama' => 'required|min:3',
                'stok' => 'integer|required|min:1',
                'harga' => 'integer|required|min:1',
                'deskripsi' => 'required|min:10'
            ];
        } else {
            $validation = [
                'nama' => 'required|min:3|unique:produk',
                'stok' => 'integer|required|min:1',
                'harga' => 'integer|required|min:1',
                'deskripsi' => 'required|min:10'
            ];
        }

        $validated = $request->validate($validation);

        $produk->nama = $request->nama;
        $produk->stok = $request->stok;
        $produk->harga = $request->harga;
        $produk->deskripsi = $request->deskripsi;
        $produk->save();

        return redirect('/')->with('sukses', 'Data berhasil diperbarui');
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect('/')->with('sukses', 'Data berhasil dihapus');
    }
}
