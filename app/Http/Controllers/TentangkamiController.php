<?php

namespace App\Http\Controllers;

use App\Models\Tentangkami;
use Illuminate\Http\Request;

class TentangkamiController extends Controller
{
    // admin
    public function selectAdmin()
    {
        $files = Tentangkami::all();

        return view('admin.tentangkami.tentang_kami', compact('files'));
    }

    public function showAdmin($id)
    {
        $files = Tentangkami::find($id);

        return view('admin.tentangkami.detail', compact('files'));
    }

    public function insertTentangkami(request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('images'), $imageName);

        $produk = new Tentangkami();
        $produk->title = $request->input('title');
        $produk->content = $request->input('content');
        $produk->photo = $imageName;
        $produk->save();

        return redirect()->route('admin.tentangkami')->with('success', 'Data Berhasil Disimpan!');
    }

    // guest
    public function selectGuest()
    {
        $files = Tentangkami::all();

        return view('guest.tentangkami', compact('files'));
    }

    // user
    public function selectUser()
    {
        $files = Tentangkami::all();

        return view('user.tentang_kami', compact('files'));
    }
}
