<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $primaryKey = 'id_peminjaman';

    protected $table = 'peminjaman';
    protected $fillable = ['id_anggota', 'no_buku', 'tanggal_pinjam', 'tanggal_kembali', 'status'];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota', 'id_anggota');
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'no_buku', 'no_buku');
    }

    public static $rules = [
        'id_anggota' => 'required|exists:anggota,id_anggota',
        'no_buku' => 'required|exists:buku,no_buku',
        'tanggal_pinjam' => 'required|date',
        'tanggal_kembali' => 'nullable|date|after_or_equal:tanggal_pinjam',
        'status' => 'required|in:dipinjam,kembali'
    ];
}
