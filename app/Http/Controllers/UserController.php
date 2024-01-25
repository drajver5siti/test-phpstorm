<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function getLoginPage() : View
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate the login request
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        $credentials = $request->only(['username', 'password']);
        if (auth()->attempt($credentials)) {
            // Authentication successful
            return redirect('/');
        }

        // Authentication failed
        return back()->withErrors(['username' => 'Invalid credentials']);
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
