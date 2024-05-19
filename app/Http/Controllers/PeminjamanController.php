<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Anggota;
use App\Models\Buku;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjamans = DB::table('peminjaman')->get();
        return view('peminjaman.index', compact('peminjamans'));
    }

    public function create()
    {
        $anggota = Anggota::all();
        $buku = Buku::all();
        return view('peminjaman.create', compact('anggota', 'buku'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_anggota' => 'required|exists:anggota,id_anggota',
            'no_buku' => 'required|exists:buku,no_buku',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'nullable|date|after_or_equal:tanggal_pinjam',
            'status' => 'required|in:dipinjam,kembali'
        ]);

        Peminjaman::create($validatedData);

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil ditambahkan.');
    }

    public function edit($id)
{
    $peminjaman = Peminjaman::findOrFail($id);
    $anggota = Anggota::all();
    $buku = Buku::all();
    return view('peminjaman.edit', compact('peminjaman', 'anggota', 'buku'));
}

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_anggota' => 'required|exists:anggota,id_anggota',
            'no_buku' => 'required|exists:buku,no_buku',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'nullable|date|after_or_equal:tanggal_pinjam',
            'status' => 'required|in:dipinjam,kembali'
        ]);

        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update($validatedData);

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil dihapus.');
    }
}
