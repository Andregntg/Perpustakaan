<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sanksi extends Model
{
    protected $table = 'sanksi'; // Nama tabel yang sesuai dengan model

    protected $fillable = ['id_anggota', 'id_peminjaman', 'jumlah_denda', 'status']; // Kolom yang dapat diisi secara massal

    // Definisi relasi dengan model 'Anggota'
    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota', 'id_anggota');
    }

    // Definisi relasi dengan model 'Peminjaman'
    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class, 'id_peminjaman', 'id_peminjaman');
    }
}
