<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        // Validate the form input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Try to log the admin in using the 'admin' guard
        if (
            Auth::guard('admin')->attempt(
                ['email' => $request->email, 'password' => $request->password],
                $request->filled('remember')
            )
        ) {
            // Redirect to admin dashboard or intended URL
            return redirect()->intended(route('admin.dashboard'));
        }

        // Login failed — redirect back with error
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}

