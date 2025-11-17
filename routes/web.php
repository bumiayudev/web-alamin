<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
});
Route::get('/structures', function () {
    return view('structures');
});
Route::get('/activities', function () {
    return view('activities');
});
Route::get('/budget', function () {
    return view('budget');
});
Route::get('/admin', function(){
    return view('admin.dashboard');
})->middleware('auth');
Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::POST('/login', [AuthController::class, 'login_action']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::POST('/register', [AuthController::class, 'register_action']);
Route::get('/logout', [AuthController::class, 'logout']);
