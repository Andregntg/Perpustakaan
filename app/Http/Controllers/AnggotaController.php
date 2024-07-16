<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::paginate(10);
        return view('admin.anggota.index', compact('anggota'));
    }

    public function create()
    {
        return view('admin.anggota.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:150',
            'no_hp' => 'required|max:16',
            'alamat' => 'required',
            'email' => 'required|email|max:200|unique:anggota,email',
        ]);

        Anggota::create($request->all());

        return redirect()->route('admin.anggota.index')->with('success', 'Anggota berhasil ditambahkan.');
    }

    public function show($id_anggota)
    {
        $anggota = Anggota::findOrFail($id_anggota);
        return view('admin.anggota.show', compact('anggota'));
    }

    public function edit($id_anggota)
    {
        $anggota = Anggota::findOrFail($id_anggota);
        return view('admin.anggota.edit', compact('anggota'));
    }

    public function update(Request $request, $id_anggota)
    {
        $anggota = Anggota::findOrFail($id_anggota);

        $request->validate([
            'nama' => 'required|max:150',
            'no_hp' => 'required|max:16',
            'alamat' => 'required',
            'email' => 'required|email|max:200|unique:anggota,email,' . $id_anggota . ',id_anggota',
        ]);

        $anggota->update($request->all());

        return redirect()->route('admin.anggota.index')->with('success', 'Anggota berhasil diperbarui.');
    }

    public function destroy($id_anggota)
    {
        $anggota = Anggota::findOrFail($id_anggota);
        $anggota->delete();

        return redirect()->route('admin.anggota.index')->with('success', 'Anggota berhasil dihapus.');
    }
}
