<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required'=> 'username harus diisi',
            'password.required'=> 'password harus diisi'
        ]);

        $user = User::where('username', $request->username)->first();

        if (!$user || !password_verify($request->password, $user->password)) {
            return redirect()->back()->with('error', 'Username atau password salah');
        }

        Auth::login($user);
        
        return redirect()->route('admin');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); // Hapus semua session
        $request->session()->regenerateToken(); // Regenerasi CSRF token
        return redirect()->route('auth');
    }
}
