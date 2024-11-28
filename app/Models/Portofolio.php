<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $table = 'portofolio';

    protected $fillable = [
        'nama_portofolio',  // Nama portofolio
        'deskripsi',        // Deskripsi portofolio
        'kategori',         // Kategori portofolio
        'link_portofolio',  // Link portofolio
        'foto',             // Foto portofolio
    ];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'kategori' => 'string', // Cast kategori sebagai string (enum di database akan dikembalikan sebagai string di PHP)
    ];
}