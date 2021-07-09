<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'asdasdasd test tono asdasdasd';
});
// introduction
Route::redirect('/about-page', '/about');
Route::get('/about', function () {
    return 'toniiasi';
});

Route::get('/home', fn () => view('welcome'))->middleware('auth');

// registration
Route::prefix('register')->name('register.')->group(function () {
    Route::get('/create', [RegisterController::class, 'create']);
    Route::post('/store', [RegisterController::class, 'store'])->name('store');
});

// login
Route::prefix('login')->name('login.')->group(function () {
    Route::get('/', [LoginController::class, 'login_page'])->name('loginpage');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
});

// logout
Route::post('/logout', [LogoutController::class, 'logout'])->middleware('auth')->name('logout');