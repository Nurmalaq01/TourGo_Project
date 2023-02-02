<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "pesans";
    protected $fillable = [
        'pesan',
        'tempat_wisata',
        'paket_wisata',
        'guide',
        'nama',
        'tanggal',
        'user',
    ];
}
