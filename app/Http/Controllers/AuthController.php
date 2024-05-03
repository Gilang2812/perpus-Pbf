<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\userModel;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = request(['email', 'password']);

        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil
        $user = Auth::user();
            if ($user->isAdmin) {
                return redirect('/admin/dashboard');
            } else {
                return redirect('/homepage');
            }
        } else {
            // Autentikasi gagal
            return back()->withErrors(['login_error' => 'Email atau password salah']);
        }
    }

    public function getRegister()
    {
        return view('auth.register');
    }
    public function postRegister(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ], [
            'nama.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal harus 8 karakter.'
        ]);

        $nama = $request->input('nama');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = new userModel();
        $user->nama = $nama;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->isAdmin = 0;
        $user->save();

        return redirect('/login')->with('success', 'Registrasi berhasil, silakan login.');
    }
}
