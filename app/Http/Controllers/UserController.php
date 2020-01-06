<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'lokasi' => 'required',
            'jabatan' => 'required'
        ]);
        $user = User::create($validasi);

        return redirect('/user')->with('success', 'Selamat data berhasil ditambahkan');
    }
}
