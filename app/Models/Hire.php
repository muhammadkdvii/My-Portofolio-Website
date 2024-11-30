<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hire extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $table = 'hire'; // Nama tabel sesuai di database (singular)

    protected $fillable = [
        'nama_perusahaan',  // Nama perusahaan
        'email_perusahaan', // Email perusahaan
        'formulir',         // Formulir yang di-upload
    ];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        // Tidak ada casting yang diperlukan pada model ini.
    ];
}