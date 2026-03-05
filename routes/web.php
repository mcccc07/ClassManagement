<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;


// Public route
Route::get('/', function () {
    return view('home');
})->name('home');

// Guest routes (Using specific guards so logged-in users can't see login)
Route::middleware('guest:web,admin')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// Student Protected Routes
Route::middleware(['auth:web'])->group(function () {
    Route::get('/dashboard', [StudentController::class, 'index'])->name('dashboard');
});
// Admin Protected Routes
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

// Shared Protected Routes (Logout)
Route::middleware('auth:web,admin')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
