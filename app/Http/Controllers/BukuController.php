<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Penulis;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('buku.index', compact('bukus'));
    }

    public function create()
    {
        $penulis = Penulis::all();
        return view('buku.create', compact('penulis'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'no_buku' => 'required|integer|unique:buku,no_buku',
            'judul' => 'required|string|max:200',
            'edisi' => 'required|string|max:50',
            'no_rak' => 'required|string|max:50',
            'tahun' => 'required|integer|min:1900|max:' . date('Y'),
            'penerbit' => 'required|string|max:100',
            'kd_penulis' => 'required|exists:penulis,kd_penulis'
        ]);

        Buku::create($validatedData);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function edit($no_buku)
    {
        $buku = Buku::findOrFail($no_buku);
        $penulis = Penulis::all();
        return view('buku.edit', compact('buku', 'penulis'));
    }

    public function update(Request $request, $no_buku)
    {
        $validatedData = $request->validate([
            'no_buku' => 'required|integer|unique:buku,no_buku,' . $no_buku . ',no_buku',
            'judul' => 'required|string|max:200',
            'edisi' => 'required|string|max:50',
            'no_rak' => 'required|string|max:50',
            'tahun' => 'required|integer|min:1900|max:' . date('Y'),
            'penerbit' => 'required|string|max:100',
            'kd_penulis' => 'required|exists:penulis,kd_penulis'
        ]);

        $buku = Buku::findOrFail($no_buku);
        $buku->update($validatedData);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy($no_buku)
    {
        $buku = Buku::findOrFail($no_buku);
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus.');
    }
}
