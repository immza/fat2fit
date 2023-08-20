<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function showLoginForm()
    {
        return view('home.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        // Replace these with your fixed username and password
        $fixedUsername = 'fifi';
        $fixedPassword = '1234';

        if ($credentials['username'] === $fixedUsername && $credentials['password'] === $fixedPassword) {
            // Auth::loginUsingId(1); // Simulate login using user ID 1
            // return redirect()->intended('/home');
        return redirect('/db');

        }
        // return redirect('/');

        // return redirect()->back()->withErrors(['message' => 'Invalid credentials']);
    }

    // public function logout(Request $request)
    // {
    //     Auth::logout();

    //     return redirect('/');
    // }
}
