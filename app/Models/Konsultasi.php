<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;

    protected $table = 'konsultasi';

    // Kolom-kolom yang dapat diisi secara massal (fillable)
    protected $fillable = [
        'title',
        'content',
        'photo',
        // tambahkan kolom lainnya di sini sesuai kebutuhan Anda
    ];
}
