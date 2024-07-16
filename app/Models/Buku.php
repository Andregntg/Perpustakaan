<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $primaryKey = 'no_buku';

    protected $fillable = [
        'judul', 'edisi', 'no_rak', 'tahun', 'penerbit', 'kd_penulis'
    ];

    
    public function rak()
    {
        return $this->belongsTo(Rak::class, 'no_rak');
    }

    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'kd_penulis');
    }

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'no_buku');
    }
}

