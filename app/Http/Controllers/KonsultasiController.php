<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function index()
    {
        // Ambil data file dari database
        $files = Konsultasi::all();

        // Tampilkan view dengan data file
        return view('guest/konsultasi', compact('files'));
    }
}
