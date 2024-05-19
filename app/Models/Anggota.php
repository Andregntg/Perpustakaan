<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    // Nama tabel yang terkait dengan model
    protected $table = 'anggota';

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = ['nama', 'no_hp', 'alamat', 'email'];

    // Relasi dengan peminjaman
    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'id_anggota', 'id_anggota');
    }
}
