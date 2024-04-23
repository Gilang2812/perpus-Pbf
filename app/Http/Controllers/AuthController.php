<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\userModel; // Ubah userModel menjadi UserModel
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = userModel::where('email', $email)->first();

        return response()->json([
            'password_match' => Hash::check($password, $user->password),
            'input_password' => $password,
            'user_password' => $user->password
        ]);
        if (!$user || !Hash::check($password, $user->password)) {
            return response()->json(['message' => 'Email atau password salah'], 401);
        }

        $token = $user->createToken('api_token')->plainTextToken;

        return response()->json(['token' => $token], 200);
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
