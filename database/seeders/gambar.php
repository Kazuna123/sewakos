<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    use HasFactory;

    protected $fillable = [
        'kos_id',
        'nama',
        'tipe',
        'ukuran',
        'data',
    ];

    public function kos()
    {
        return $this->belongsTo(Kos::class);
    }
}
