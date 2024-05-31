<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function sign(request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('user.home')->with('success', 'Login berhasil');
        } else {
            return redirect()->route('login')->with('failed', 'Login gagal');
        }
    }

    public function daftar()
    {
        return view('auth.daftar');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username|regex:/^\S*$/',
            'phone' => 'required',
            'password' => 'required|min:8',
        ]);

        $data['email'] = $request->email;
        $data['username'] = $request->username;
        $data['phone'] = $request->phone;
        $data['password'] = Hash::make($request->password);

        User::create($data);

        $login = [
            'email' => $request->email,
            'username' => $request->username,
            'phone' => $request->phone,
            'password' => $request->password
        ];

        if (Auth::attempt($login)) {
            return redirect()->route('login');
        } else {
            return redirect()->route('login')->with('failed', 'Login gagal');
        }
    }
}
