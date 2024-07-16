<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    use HasFactory;

    protected $table = 'rak';
    protected $primaryKey = 'kd_rak';

    protected $fillable = [
        'lokasi'
    ];
    public function buku()
    {
        return $this->hasMany(Buku::class, 'no_rak');
    }
}
