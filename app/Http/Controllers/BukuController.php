<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Rak;
use App\Models\Penulis;
use Illuminate\Http\Request;


class BukuController extends Controller
{
   
    public function index()
    {
        $bukuList = Buku::paginate(10);
        return view(auth()->user()->usertype === 'admin' ? 'admin.buku.index' : 'user.buku.index', compact('bukuList'));
    }

    public function create()
    {
        $rakList = Rak::all();
        $penulisList = Penulis::all();
        return view('admin.buku.create', compact('rakList', 'penulisList'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_buku' => 'required|string|max:50|unique:buku,no_buku',
            'judul' => 'required|max:255',
            'edisi' => 'required|max:50',
            'no_rak' => 'required|exists:rak,kd_rak',
            'tahun' => 'required|integer|min:1000|max:' . date('Y'),
            'penerbit' => 'required|max:255',
            'kd_penulis' => 'required|exists:penulis,kd_penulis',
        ]);

        $data = $request->all();
        $data['tahun'] = $data['tahun'] . '-01-01'; // Mengubah tahun menjadi format tanggal

        Buku::create($data);

        return redirect()->route('admin.buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function show(Buku $buku)
    {
        return view('admin.buku.show', compact('buku'));
    }

    public function edit(Buku $buku)
    {
        $rakList = Rak::all();
        $penulisList = Penulis::all();

        
        return view('admin.buku.edit', compact('buku', 'rakList', 'penulisList'));
    }

    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'edisi' => 'required|max:50',
            'no_rak' => 'required|exists:rak,kd_rak',
            'tahun' => 'required|date',
            'penerbit' => 'required|max:255',
            'kd_penulis' => 'required|exists:penulis,kd_penulis',
        ]);

        $data = $request->all();
        $data['tahun'] = $data['tahun'] . '-01-01'; // Mengubah tahun menjadi format tanggal

        $buku->update($data);

        return redirect()->route('admin.buku.index')->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy(Buku $buku)
    {
        $buku->delete();

        return redirect()->route('admin.buku.index')->with('success', 'Buku berhasil dihapus.');
    }
}
