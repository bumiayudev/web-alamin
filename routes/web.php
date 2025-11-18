<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ActivityController;

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
Route::get('/activities/list', [ActivityController::class, 'index'])->middleware('auth');
Route::get('/activities/create', [ActivityController::class, 'create'])->middleware('auth');
Route::post('/activities/create', [ActivityController::class, 'store'])->middleware('auth')->name('activities.store');
Route::get('/activities/{id}/edit', [ActivityController::class, 'edit'])->middleware('auth');
Route::post('/activities/{id}/edit', [ActivityController::class, 'update'])->middleware('auth')->name('activities.update');
Route::post('/activities/{id}/edit_file', [ActivityController::class, 'update_file'])->middleware('auth')->name('activities.update_file');
Route::get('/activities/{id}/delete', [ActivityController::class, 'destroy'])->middleware('auth')->name('activities.delete');
