<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    // Method untuk menampilkan semua data anggota
    public function index()
    {
        $anggotas = Anggota::all();
        return view('anggota.index', ['anggotas' => $anggotas]);
    }

    // Method untuk menampilkan form tambah anggota
    public function create()
    {
        return view('anggota.create');
    }

    // Method untuk menyimpan data anggota yang baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'no_hp' => 'required|max:16',
            'alamat' => 'required',
            'email' => 'required|email|unique:anggota,email',
        ]);

        Anggota::create($validatedData);

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil ditambahkan.');
    }

    // Method untuk menampilkan detail anggota
    public function show($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('anggota.show', ['anggota' => $anggota]);
    }

    // Method untuk menampilkan form edit anggota
    public function edit($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('anggota.edit', ['anggota' => $anggota]);
    }

    // Method untuk menyimpan perubahan pada data anggota
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'no_hp' => 'required|max:16',
            'alamat' => 'required',
            'email' => 'required|email|unique:anggota,email,'.$id,
        ]);

        $anggota = Anggota::findOrFail($id);
        $anggota->update($validatedData);

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil diperbarui.');
    }

    // Method untuk menghapus data anggota
    public function destroy($id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil dihapus.');
    }
}
