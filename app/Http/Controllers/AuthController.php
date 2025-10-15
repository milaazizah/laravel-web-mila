<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        

        $request->validate([
            'password' => 'required|min:3|regex:/[A-Z]/',

        ]);

        $username = $request->username;
        $password = $request->password;

        
    }

    public function index()
    {
        return view('login-form');
    }

    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validasi dasar
        $request->validate([
            'nama' => ['required', 'regex:/^[A-Za-z\s]+$/'], // hanya huruf & spasi
            'alamat' => 'required|string|max:300',
            'tgl_lahir' => 'required|date',
            'username' => 'required|string|min:3',
            'password' => ['required', 'min:6', 'regex:/^(?=.*[A-Z])(?=.*\d).+$/'], // wajib ada huruf kapital & angka
            'confirm_password' => 'required|string|min:6'
        ]);

        if ($request->password !== $request->confirm_password) {
            return redirect()->back()
                ->withInput() // agar form tidak kosong lagi
                ->with('error', 'Confirm Password tidak sesuai');
        }

        return redirect()->route('auth.login')->with('success', 'Registrasi berhasil! Silahkan Login.');
    }
}
