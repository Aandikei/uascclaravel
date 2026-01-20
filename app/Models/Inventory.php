<?php

namespace App\Models;

use App\Enums\Kondisi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'kode',
        'stok',
        'lokasi',
        'kondisi',
        'petugas',
    ];

    protected $casts = [
        'kondisi' => Kondisi::class,
    ];
}
