<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    // admin
    public function selectAdmin()
    {
       $files = Konsultasi::all();

       return view('admin.konsultasi.konsultasi', compact('files'));
    }

    public function showAdmin($id)
    {
        $files = Konsultasi::all($id);

       return view('admin.konsultasi.detail', compact('files'));
    }

    public function insertKonsultasi(request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'photo' => 'required|image:jpeg,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('images'), $imageName);

        $produk = new Konsultasi();
        $produk->title = $request->input('title');
        $produk->content = $request->input('content');
        $produk->photo = $imageName;
        $produk->save();

        return redirect()->route('admin.konsultasi')->with('success', 'Data Berhasil Disimpan!');
    }

    // guest
    public function selectGuest()
    {
        $files = Konsultasi::all();

        return view('guest.konsultasi', compact('files'));
    }

    // user
    public function selectUser()
    {
        $files = Konsultasi::all();

        return view('user.konsultasi', compact('files'));
    }
}
