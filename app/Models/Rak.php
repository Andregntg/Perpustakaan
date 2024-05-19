<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    protected $table = 'rak';
    protected $primaryKey = 'kd_rak';
    public $timestamps = false; // Jika tabel tidak memiliki kolom timestamp

    protected $fillable = ['lokasi'];

    // Relasi dengan model Buku
    public function bukus()
    {
        return $this->hasMany(Buku::class, 'no_rak', 'kd_rak');
    }
}
