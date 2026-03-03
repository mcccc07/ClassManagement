<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
