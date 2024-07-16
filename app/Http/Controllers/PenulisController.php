<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    public function index()
    {
        $penulisList = Penulis::paginate(10);
        return view(auth()->user()->usertype === 'admin' ? 'admin.penulis.index' : 'user.penulis.index', compact('penulisList'));
    }

    public function create()
    {
        return view('admin.penulis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_penulis' => 'required|max:150',
            'tempat_lahir' => 'required|max:100',
            'tgl_lahir' => 'required|date',
            'email' => 'required|email|max:150|unique:penulis,email',
        ]);

        Penulis::create($request->all());

        return redirect()->route('admin.penulis.index')->with('success', 'Penulis berhasil ditambahkan.');
    }

    public function show(Penulis $penulis)
    {
        return view('admin.penulis.show', compact('penulis'));
    }

    public function edit(Penulis $penulis)
    {
        return view('admin.penulis.edit', compact('penulis'));
    }

    public function update(Request $request, Penulis $penulis)
    {
        $request->validate([
            'nama_penulis' => 'required|max:150',
            'tempat_lahir' => 'required|max:100',
            'tgl_lahir' => 'required|date',
            'email' => 'required|email|max:150|unique:penulis,email,' . $penulis->kd_penulis . ',kd_penulis',
        ]);

        $penulis->update($request->all());

        return redirect()->route('admin.penulis.index')->with('success', 'Penulis berhasil diperbarui.');
    }

    public function destroy(Penulis $penulis)
    {
        $penulis->delete();

        return redirect()->route('admin.penulis.index')->with('success', 'Penulis berhasil dihapus.');
    }
}
