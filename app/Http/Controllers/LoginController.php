<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validation: Updated regex to allow both @student and the main @laverdad domain
        $request->validate([
            'email' => [
                'required',
                'email',
                'regex:/^[a-zA-Z0-9._%+-]+@(.+\.)?laverdad\.edu\.ph$/i'
            ],
            'password' => 'required',
        ], [
            'email.regex' => 'Please use your official La Verdad email address.',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->filled('remember');

        //Attempt Student Login (using the default 'web' guard)
        if (Auth::guard('web')->attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        // Attempt Admin Login (using the 'admin' guard)
        if (Auth::guard('admin')->attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }

        // Fail if neither guard matches
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        // Logout from both potential guards
        Auth::guard('admin')->logout();
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
