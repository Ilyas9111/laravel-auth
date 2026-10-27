<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function Register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create the user
        $user = User::create($validatedData);

        // Log the user in
        auth()->login($user);
    }

    public function Login()
    {

    }

    public function Logout(Request $request)
    {
        Auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('show.login');
    }
}
