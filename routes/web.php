<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\HospitalController;

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


Route::get('/register', function () {
    return view('pages.register');
});

// Route::get('/login', function () {
//     return view('pages.login');
// });

// Show login form
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
;


// Show registration form (if applicable)
Route::get('/register/hospital', [HospitalController::class, 'create'])->name('register.hospital.form');

// Handle form submission
Route::post('/register/hospital', [HospitalController::class, 'store'])->name('register.hospital');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.submit');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    });


    // Route::middleware('auth:admin')->group(function () {

    //     Route::get('dashboard', function () {
    //         return view('admin.dashboard');
    //     })->name('dashboard');
    // });
});

Route::get('/admin/dashboard/{page}', [AdminDashboardController::class, 'loadPage']);

Route::post('/admin/hospital/{id}/approve', [AdminDashboardController::class, 'approve'])->name('admin.hospital.approve');
Route::post('/admin/hospital/{id}/reject', [AdminDashboardController::class, 'reject'])->name('admin.hospital.reject');

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
