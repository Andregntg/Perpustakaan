<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    // Nama tabel yang terkait dengan model
    protected $table = 'buku';

    // Kolom primary key
    protected $primaryKey = 'no_buku';

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = ['no_buku', 'judul', 'edisi', 'no_rak', 'tahun', 'penerbit', 'kd_penulis'];

    // Relasi dengan model Rak
    public function rak()
    {
        return $this->belongsTo(Rak::class, 'no_rak', 'kd_rak');
    }
    // Relasi dengan penulis
    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'kd_penulis', 'kd_penulis');
    }
}
