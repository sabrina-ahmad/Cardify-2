<?php

// use App\Http\Controllers\Admin\AdminDashboardController;
// use App\Http\Controllers\Admin\Auth\LoginController;
// use App\Http\Controllers\HospitalController;

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\HospitalRegisterController;
use App\Http\Controllers\Auth\PatientRegisterController;
use App\Http\Controllers\Admin\HospitalApprovalController;
use App\Http\Controllers\HospitalDashboardController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/service', function () {
    return view('pages.service');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/about', function () {
    return view('pages.about');
});


// Route::get('/register', function () {
//     return view('pages.register');
// });

// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);



Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', function () {
    return view('auth.register'); // your tabbed register.blade.php
})->name('register');

// hospital registration
Route::post('/register/hospital', [HospitalRegisterController::class, 'store'])->name('register.hospital');

// patient registration
Route::post('/register/patient', [PatientRegisterController::class, 'store'])->name('register.patient');





// Route::prefix('admin')->middleware(['auth'])->group(function () {
//     Route::middleware('can:isAdmin')->group(function () {
//         Route::get('/dashboard', function () {
//             return view('admin.dashboard');
//         })->name('admin.dashboard');

//         Route::get('/hospitals/waitlist', [HospitalApprovalController::class, 'index'])->name('admin.hospitals.waitlist');
//         Route::post('/hospitals/{id}/approve', [HospitalApprovalController::class, 'approve'])->name('admin.hospitals.approve');
//         Route::post('/hospitals/{id}/reject', [HospitalApprovalController::class, 'reject'])->name('admin.hospitals.reject');
//     });
// });

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/hospitals/waitlist', [HospitalApprovalController::class, 'index'])->name('admin.hospitals.waitlist');
    Route::post('/hospitals/{id}/approve', [HospitalApprovalController::class, 'approve'])->name('admin.hospitals.approve');
    Route::post('/hospitals/{id}/reject', [HospitalApprovalController::class, 'reject'])->name('admin.hospitals.reject');
});






// Route::post('/register/hospital', [RegisterController::class, 'registerHospital'])->name('register.hospital');
// Route::post('/register/patient', [RegisterController::class, 'registerPatient'])->name('register.patient');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/hospital/dashboard', [HospitalDashboardController::class, 'index'])
//         ->name('hospital.dashboard');
// });

Route::middleware(['auth:hospital'])->group(function () {
    Route::get('/hospital/dashboard', [HospitalDashboardController::class, 'index'])
        ->name('hospital.dashboard');
});


Route::middleware('auth')->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);

// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// // Authenticated user dashboard
// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });





// Route::get('/login', function () {
//     return view('pages.login');
// });

// Show login form
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// ;


// // Show registration form (if applicable)
// Route::get('/register/hospital', [HospitalController::class, 'create'])->name('register.hospital.form');

// // Handle form submission
// Route::post('/register/hospital', [HospitalController::class, 'store'])->name('register.hospital');


// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
//     Route::post('login', [LoginController::class, 'login'])->name('login.submit');
//     Route::post('logout', [LoginController::class, 'logout'])->name('logout');

//     Route::middleware('auth:admin')->group(function () {
//         Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
//     });


//     // Route::middleware('auth:admin')->group(function () {

//     //     Route::get('dashboard', function () {
//     //         return view('admin.dashboard');
//     //     })->name('dashboard');
//     // });
// });

// Route::get('/admin/dashboard/{page}', [AdminDashboardController::class, 'loadPage']);

// Route::post('/admin/hospital/{id}/approve', [AdminDashboardController::class, 'approve'])->name('admin.hospital.approve');
// Route::post('/admin/hospital/{id}/reject', [AdminDashboardController::class, 'reject'])->name('admin.hospital.reject');

// Admin Auth
// Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
// Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.submit');
// Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

// // Admin dashboard (only for logged-in admins)
// Route::middleware(['auth:admin'])->group(function () {
//     Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
// });




// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// use App\Http\Controllers\Auth\RegisterController;

// Route::post('/register/patient', [RegisterController::class, 'registerPatient'])->name('register.patient');
