<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HospitalRegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'hospital_name' => 'required|string|max:255',
            'license_number' => 'required|string|max:255|unique:hospitals',
            'contact_person' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'email' => 'required|email|unique:hospitals',
            'password' => 'required|string|min:6|confirmed',
        ]);

        Hospital::create([
            'hospital_name' => $request->hospital_name,
            'license_number' => $request->license_number,
            'contact_person' => $request->contact_person,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address ?? '',
            'status' => 'pending', // waitlist until admin approval
        ]);

        return redirect()->route('login')->with('success', 'Hospital registered! Waiting for admin approval.');
    }
}
