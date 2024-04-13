<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentangkami extends Model
{
    use HasFactory;

    // Nama tabel yang akan digunakan oleh model
    protected $table = 'tentangkami';

    // Kolom-kolom yang dapat diisi secara massal (fillable)
    protected $fillable = [
        'title',
        'content',
        'photo',
        // tambahkan kolom lainnya di sini sesuai kebutuhan Anda
    ];
}
