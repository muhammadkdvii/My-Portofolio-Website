<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $table = 'skills'; // Nama tabel sesuai di database (singular)

    protected $fillable = [
        'nama_skill',    // Nama skill
        'deskripsi',     // Deskripsi skill
        'presentase',    // Presentase skill
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        // Tidak ada kolom sensitif yang perlu disembunyikan
    ];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'presentase' => 'integer', // Pastikan presentase adalah integer
    ];
}