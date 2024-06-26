<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $primaryKey = 'pembayaran_id';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'content',
        'photo'
    ];
}
