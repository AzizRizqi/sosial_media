<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [\App\Http\Controllers\LoginController::class,'index']);
Route::get('login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'login'])->name('action-login');



Route::resource('dashboard',\App\Http\Controllers\DashboardController::class);
Route::resource('profile',\App\Http\Controllers\ProfileController::class);
Route::resource('status',\App\Http\Controllers\StatusController::class);
