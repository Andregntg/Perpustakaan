<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use Illuminate\Http\Request;

class RakController extends Controller
{
    // Menampilkan semua rak
    public function index()
    {
        $raks = Rak::all();
        return view('rak.index', compact('raks'));
    }

    // Menampilkan form untuk menambahkan rak baru
    public function create()
    {
        return view('rak.create');
    }

    // Menyimpan rak baru ke dalam database
    public function store(Request $request)
    {
        $request->validate([
            'lokasi' => 'required|max:150',
        ]);

        Rak::create($request->all());

        return redirect()->route('rak.index')
                         ->with('success', 'Rak berhasil ditambahkan.');
    }

    // Menampilkan detail rak
    public function show(Rak $rak)
    {
        return view('rak.show', compact('rak'));
    }

    // Menampilkan form untuk mengedit rak
    public function edit(Rak $rak)
    {
        return view('rak.edit', compact('rak'));
    }

    // Mengupdate rak dalam database
    public function update(Request $request, Rak $rak)
    {
        $request->validate([
            'lokasi' => 'required|max:150',
        ]);

        $rak->update($request->all());

        return redirect()->route('rak.index')
                         ->with('success', 'Rak berhasil diperbarui.');
    }

    // Menghapus rak dari database
    public function destroy(Rak $rak)
    {
        $rak->delete();

        return redirect()->route('rak.index')
                         ->with('success', 'Rak berhasil dihapus.');
    }
}
