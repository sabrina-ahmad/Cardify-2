<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Hospital;

class RegisterController extends Controller
{
    public function registerHospital(Request $request)
    {
        $validated = $request->validate([
            'hospital_name' => 'required|string|max:255',
            'license_number' => 'required|string|unique:hospitals',
            'contact_person' => 'required|string|max:255',
            'phone_number' => 'required|string',
            'email' => 'required|email|unique:hospitals',
            'password' => 'required|confirmed|min:6',
            'address' => 'required|string|max:255', // don’t forget this!
        ]);

        $hospital = Hospital::create([
            'hospital_name' => $validated['hospital_name'],
            'license_number' => $validated['license_number'],
            'contact_person' => $validated['contact_person'],
            'phone_number' => $validated['phone_number'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'address' => $validated['address'],
        ]);

        return redirect()->back()->with('success', 'Hospital registered. Awaiting approval.');
    }

    public function registerPatient(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            // 'username' => 'required|unique:users', // only if using username
        ]);

        User::create([
            'name' => $validated['fullname'],  // or change 'fullname' to 'name' in form
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => 'patient',
        ]);

        return redirect()->back()->with('success', 'Patient registered.');
    }
}
