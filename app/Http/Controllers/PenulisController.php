<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis;

class PenulisController extends Controller
{
    
    public function index()
    {
        $penulis = Penulis::all();
        return view('penulis.index', compact('penulis'));
    }
    
    
    public function create()
    {
        return view('penulis.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_penulis' => 'required|string|max:150',
            'email' => 'required|string|max:200',
            'alamat' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:150',
        ]);

        Penulis::create($validatedData);

        return redirect()->route('penulis.index')->with('success', 'Penulis berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $penulis = Penulis::findOrFail($id);

        return view('penulis.edit', compact('penulis'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_penulis' => 'required|string|max:150',
            'email' => 'required|string|max:200',
            'alamat' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:150',
        ]);

        $penulis = Penulis::findOrFail($id);
        $penulis->update($validatedData);

        return redirect()->route('penulis.index')->with('success', 'Penulis berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $penulis = Penulis::findOrFail($id);
        $penulis->delete();

        return redirect()->route('penulis.index')->with('success', 'Penulis berhasil dihapus.');
    }
}
