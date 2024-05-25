<?php

namespace App\Http\Controllers;

use App\Models\Publikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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

    public function edit($id)
    {
        // get post by ID
        $post = Publikasi::findOrFail($id);

        // render view with post
        return view('admin.publikasi.edit', compact('post'));
    }

    public function update(request $request, $id)
    {
        //validate form
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        //get post by ID
        $post = Publikasi::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('photo')) {
            // Get the uploaded file
            $image = $request->file('photo');
            // Generate a new name for the file
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // Store the new image in public/images
            $image->move(public_path('images'), $imageName);

            // Delete old image if it exists
            if ($post->photo) {
                $oldImagePath = public_path('images/' . $post->photo);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            //update post with new image
            $post->update([
                'photo' => $imageName,
                'title' => $request->title,
                'content' => $request->content,
            ]);
        } else {
            //update post without new image
            $post->update([
                'title' => $request->title,
                'content' => $request->content,
            ]);
        }

        //redirect to index
        return redirect()->route('admin.publikasi.detail', $id)->with(['success' => 'Data Berhasil Diubah!']);
    }

     // guest
    public function selectGuest()
    {
        $files = Publikasi::all();
 
        return view('guest.publikasi', compact('files'));
    }

    public function showGuest($id)
    {
        $files = Publikasi::find($id);

        return view('guest.publikasi_detail', compact('files'));
    }
 
    // user
    public function selectUser()
    {
        $files = Publikasi::all();

        return view('user.publikasi', compact('files'));
    }

     public function showUser($id)
    {
        $files = Publikasi::find($id);

        return view('user.publikasi_detail', compact('files'));
    }

}
