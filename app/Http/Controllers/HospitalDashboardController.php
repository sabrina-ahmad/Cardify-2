<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HospitalDashboardController extends Controller
{
    public function index()
    {
        $hospital = Auth::user(); // if using hospital guard, adjust accordingly
        return view('hospital.dashboard', compact('hospital'));
    }
}
