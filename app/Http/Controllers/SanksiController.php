<?php

namespace App\Http\Controllers;

use App\Models\Sanksi;
use App\Models\Anggota;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class SanksiController extends Controller
{
    public function index()
    {
        $sanksiList = Sanksi::paginate(10);
        return view('admin.sanksi.index', compact('sanksiList'));
    }

    public function create()
    {
        $anggotaList = Anggota::all();
        $peminjamanList = Peminjaman::all();
        return view('admin.sanksi.create', compact('anggotaList', 'peminjamanList'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_anggota' => 'required|exists:anggota,id_anggota',
            'id_peminjaman' => 'required|exists:peminjaman,id_peminjaman',
            'jumlah_denda' => 'required|integer',
            'status' => 'required|in:tunggakan,lunas',
        ]);

        Sanksi::create($request->all());

        return redirect()->route('admin.sanksi.index')->with('success', 'Sanksi berhasil ditambahkan.');
    }

    public function show(Sanksi $sanksi)
    {
        return view('admin.sanksi.show', compact('sanksi'));
    }

    public function edit(Sanksi $sanksi)
    {
        $anggotaList = Anggota::all();
        $peminjamanList = Peminjaman::all();
        return view('admin.sanksi.edit', compact('sanksi', 'anggotaList', 'peminjamanList'));
    }

    public function update(Request $request, Sanksi $sanksi)
    {
        $request->validate([
            'id_anggota' => 'required|exists:anggota,id_anggota',
            'id_peminjaman' => 'required|exists:peminjaman,id_peminjaman',
            'jumlah_denda' => 'required|integer',
            'status' => 'required|in:tunggakan,lunas',
        ]);

        $sanksi->update($request->all());

        return redirect()->route('admin.sanksi.index')->with('success', 'Sanksi berhasil diperbarui.');
    }

    public function destroy(Sanksi $sanksi)
    {
        $sanksi->delete();

        return redirect()->route('admin.sanksi.index')->with('success', 'Sanksi berhasil dihapus.');
    }
}
