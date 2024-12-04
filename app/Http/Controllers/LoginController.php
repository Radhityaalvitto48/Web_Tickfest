<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        // Mendapatkan email dan password dari input
        $email = $request->input('email');
        $password = $request->input('password');

        // Tentukan kredensial yang valid (untuk tujuan demo)
        $validEmail = 'user123@gmail.com';
        $validPassword = '123';

        // Cek apakah email dan password yang dimasukkan sesuai
        if ($email == $validEmail && $password == $validPassword) {
            // Login berhasil
            return redirect('/LandingPage'); // Arahkan ke halaman yang diinginkan setelah login
        } else {
            // Login gagal
            return back()->withErrors(['message' => 'Invalid credentials'])->withInput();
        }
    }
}
