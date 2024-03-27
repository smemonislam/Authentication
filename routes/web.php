<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboradController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('store');    
    
    Route::get('/register', [RegisteredUserController::class,'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');
  
});



Route::middleware('auth')->group(function () {
    Route::get('/dashborad', [DashboradController::class,'index'])->name('home');
    Route::post('/profile', [ProfileController::class,'update'])->name('profile');
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
