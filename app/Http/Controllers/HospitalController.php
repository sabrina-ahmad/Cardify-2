<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HospitalController extends Controller
{
    // Optional: Show registration form
    public function create()
    {
        return view('auth.hospital-register');
    }

    // Handle registration form submission
    public function store(Request $request)
    {
        // Validate incoming data
        $validator = Validator::make($request->all(), [
            'hospital_name' => 'required|string|max:255',
            'license_number' => 'required|string|max:100|unique:hospitals',
            'contact_person' => 'required|string|max:100',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|max:255|unique:hospitals',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Store hospital in DB
        Hospital::create([
            'hospital_name' => $request->hospital_name,
            'license_number' => $request->license_number,
            'contact_person' => $request->contact_person,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'verified' => false,
        ]);

        return redirect('/login')->with('success', 'Hospital registered successfully. Please login.');

    }
}
