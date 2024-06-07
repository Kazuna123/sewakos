<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
    use HasFactory;

    protected $fillable = [
        'luas_id',
        'tipe_id',
        'slug',
        'nama',
        'harga',
        'alamat',
        'fasilitas',
        'jarak',
        'gambar',
        'telepon',
    ];

    public function gambars()
    {
        return $this->hasMany(Gambar::class);
    }
}
