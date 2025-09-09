<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login'); // Your admin login Blade file
    }

    public function login(Request $request)
    {
        // ✅ Validate the form input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // ✅ Try to log the admin in using the 'admin' guard
        if (
            Auth::guard('admin')->attempt(
                ['email' => $request->email, 'password' => $request->password],
                $request->filled('remember') // for remember me
            )
        ) {
            // ✅ Redirect to admin dashboard or intended URL
            return redirect()->intended(route('admin.dashboard'));
        }

        // ❌ Login failed — redirect back with error
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

// namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class LoginController extends Controller
// {
//     public function showLoginForm()
//     {
//         return view('pages.login'); // Make sure this blade file exists
//     }

//     public function login(Request $request)
//     {
//         // ✅ Validate request
//         $request->validate([
//             'email' => 'required|email',
//             'password' => 'required',
//         ]);

//         // ✅ Try to log in as hospital
//         if (
//             Auth::guard('hospital')->attempt([
//                 'email' => $request->email,
//                 'password' => $request->password
//             ], $request->filled('remember'))
//         ) {
//             return redirect()->intended('/hospital/dashboard');
//         }

//         // ✅ Try to log in as patient
//         if (
//             Auth::guard('patient')->attempt([
//                 'email' => $request->email,
//                 'password' => $request->password
//             ], $request->filled('remember'))
//         ) {
//             return redirect()->intended('/patient/dashboard');
//         }

//         // ❌ If login fails for both
//         return back()->withErrors([
//             'email' => 'Invalid email or password.'
//         ])->onlyInput('email');
//     }

//     public function logout(Request $request)
//     {
//         Auth::guard('hospital')->logout();
//         Auth::guard('patient')->logout();

//         $request->session()->invalidate();
//         $request->session()->regenerateToken();

//         return redirect('/login');
//     }
// }

