<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Models\Hospital;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // ✅ 1. Try to login from users table
        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user, $request->filled('remember'));

            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role === 'doctor') {
                return redirect()->route('dashboard'); // doctor dashboard
            } elseif ($user->role === 'patient') {
                return redirect()->route('dashboard'); // patient dashboard
            }

            return redirect()->route('dashboard'); // fallback
        }

        // ✅ 2. Try to login from hospitals table
        $hospital = Hospital::where('email', $request->email)->first();
        if ($hospital && Hash::check($request->password, $hospital->password)) {
            if ($hospital->status !== 'approved') {
                return back()->withErrors([
                    'email' => 'Your hospital account is pending approval.',
                ]);
            }


            // You may want a separate guard for hospitals
            // Auth::guard('hospital')->login($hospital, $request->filled('remember'));
            Auth::login($hospital, $request->filled('remember'));
            return redirect()->route('hospital.dashboard');

            // return redirect()->route('hospital.dashboard');
        }


        // ❌ Invalid credentials
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function showLoginForm()
    {
        return view('auth.login'); // 👈 make sure resources/views/auth/login.blade.php exists
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

