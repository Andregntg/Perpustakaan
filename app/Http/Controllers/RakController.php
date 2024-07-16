<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use Illuminate\Http\Request;

class RakController extends Controller
{
    public function index()
    {
        $rakList = Rak::paginate(10);
        return view('admin.rak.index', compact('rakList'));
    }

    public function create()
    {
        return view('admin.rak.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'lokasi' => 'required|max:150',
        ]);

        Rak::create($request->all());

        return redirect()->route('admin.rak.index')->with('success', 'Rak berhasil ditambahkan.');
    }

    public function show(Rak $rak)
    {
        return view('admin.rak.show', compact('rak'));
    }

    public function edit(Rak $rak)
    {
        return view('admin.rak.edit', compact('rak'));
    }

    public function update(Request $request, Rak $rak)
    {
        $request->validate([
            'lokasi' => 'required|max:150',
        ]);

        $rak->update($request->all());

        return redirect()->route('admin.rak.index')->with('success', 'Rak berhasil diperbarui.');
    }

    public function destroy(Rak $rak)
    {
        $rak->delete();

        return redirect()->route('admin.rak.index')->with('success', 'Rak berhasil dihapus.');
    }
}
