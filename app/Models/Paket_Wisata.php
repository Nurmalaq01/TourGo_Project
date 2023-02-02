<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket_Wisata extends Model
{
    use HasFactory;
    protected $table = "paket__wisatas";
    protected $fillable = [
        'nama_paket',
        'deskripsi',
        'harga'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

}
