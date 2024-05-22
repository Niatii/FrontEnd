<?php

namespace App\Http\Controllers;

use App\Models\Riset;
use Illuminate\Http\Request;

class RisetController extends Controller
{
    // admin
    public function selectAdmin() {
        $files = Riset::all();

        return view('admin.riset.riset', compact('files'));
    }

    public function showAdmin($id) {
        $files = Riset::find($id);

        return view('admin.riset.riset', compact('files'));
    }

    public function insertRiset(request $request) {
        $request->validate([
        'title' => 'required|string|max::255',
        'content' => 'required|string',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);

        $imageName = time() . '.' . $requset->photo->extension();
        $request->photo->move(public_path('image'), $imageName);

        $produk = new Riset();
        $produk->title = $request->input('title');
        $produk->content = $request->input('content');
        $produk->photo = $imageName;
        $prooduk->save();

        return redirect()->route('admin.riset.riset')->with('success', 'Data Berhasil Disimpan!');
        }

        // guest
        public function selectGuest() {
            $files = Riset::all();

            return view('guest.riset', compact('files'));
        }

        // user
        public function selectUser() {
            $files = Riset::all();

            return view('user.riset', compact('files'));
        }
}
