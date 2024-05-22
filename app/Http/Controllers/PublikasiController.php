<?php

namespace App\Http\Controllers;

use App\Models\Publikasi;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    // admin
    public function selectAdmin()
    {
        $files = Publikasi::all();

        return view('admin.publikasi.publikasi', compact('files'));
    }

    public function showAdmin($id)
    {
        $files = Publikasi::find($id);

        return view('admin.publikasi.detail', compact('files'));
    }

    public function insertPublikasi(request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('images'), $imageName);

        $produk = new Publikasi();
        $produk->title = $request->input('title');
        $produk->content = $request->input('content');
        $produk->photo = $imageName;
        $produk->save();

        return redirect()->route('admin.publikasi')->with('success', 'Data Berhasil Disimpan!');
    }

     // guest
     public function selectGuest()
     {
         $files = Publikasi::all();
 
         return view('guest.publikasi', compact('files'));
     }
 
     // user
     public function selectUser()
     {
         $files = Publikasi::all();
 
         return view('user.publikasi', compact('files'));
     }

}
