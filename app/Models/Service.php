<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'service'; // Nama tabel sesuai di database (singular)

    protected $fillable = [
        'nama_service',
        'sub_nama_service',
        'deskripsi',
        'harga',
    ];

    protected $casts = [
        'harga' => 'decimal:2',
    ];
    
}