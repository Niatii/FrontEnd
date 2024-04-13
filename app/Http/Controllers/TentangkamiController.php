<?php

namespace App\Http\Controllers;

use App\Models\Tentangkami;
use Illuminate\Http\Request;

class TentangkamiController extends Controller
{
    public function index()
    {
        // Ambil data file dari database
        $files = Tentangkami::all();

        // Tampilkan view dengan data file
        return view('guest/tentang_kami', compact('files'));
    }
}
