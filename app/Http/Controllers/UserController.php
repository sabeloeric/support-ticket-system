<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // Attempt to log in the user
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            // Authentication successful, regenerate session and redirect
            $request->session()->regenerate();

            // Success flash message
            return redirect('/')
                ->with('success', 'Login successful.');
        }

        // Authentication failed, show error message
        return redirect()->back()
            ->withInput($request->only('email'))
            ->withErrors(['email' => 'Invalid credentials.']);
    }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }

}
