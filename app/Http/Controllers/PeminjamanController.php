<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Anggota;
use App\Models\Buku;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjamanList = Peminjaman::with(['anggota', 'buku'])->paginate(10);
        return view('admin.peminjaman.index', compact('peminjamanList'));
    }

    public function create()
    {
        $anggotaList = Anggota::all();
        $bukuList = Buku::all();
        return view('admin.peminjaman.create', compact('anggotaList', 'bukuList'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_buku' => 'required|exists:buku,no_buku',
            'id_anggota' => 'required|exists:anggota,id_anggota',
            'tgl_peminjaman' => 'required|date',
        ]);

        Peminjaman::create($request->all());

        return redirect()->route('admin.peminjaman.index')->with('success', 'Peminjaman berhasil ditambahkan.');
    }

    public function show(Peminjaman $peminjaman)
    {
        return view('admin.peminjaman.show', compact('peminjaman'));
    }

    public function edit(Peminjaman $peminjaman)
    {
        $anggotaList = Anggota::all();
        $bukuList = Buku::all();
        return view('admin.peminjaman.edit', compact('peminjaman', 'anggotaList', 'bukuList'));
    }

    public function update(Request $request, Peminjaman $peminjaman)
    {
        $request->validate([
            'no_buku' => 'required|exists:buku,no_buku',
            'id_anggota' => 'required|exists:anggota,id_anggota',
            'tgl_peminjaman' => 'required|date',
            'tgl_pengembalian' => 'nullable|date',
            'status' => 'required|in:kembali,belum',
        ]);

        $peminjaman->update($request->all());

        return redirect()->route('admin.peminjaman.index')->with('success', 'Peminjaman berhasil diperbarui.');
    }

    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();

        return redirect()->route('admin.peminjaman.index')->with('success', 'Peminjaman berhasil dihapus.');
    }
}
