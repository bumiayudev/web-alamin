<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\StructureController;

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
Route::get('/structures/list', [StructureController::class, 'index'])->middleware('auth');
Route::get('/structures/create', [StructureController::class, 'create'])->middleware('auth');
Route::post('/structures/create', [StructureController::class, 'store'])->middleware('auth')->name('structures.store');
Route::get('/structures/{id}/edit', [StructureController::class, 'edit']);
Route::post('/structures/{id}/edit', [StructureController::class, 'update'])->middleware('auth')->name('structures.update');
Route::post('/structures/{id}/edit_file', [StructureController::class, 'update_file'])->middleware('auth')->name('structures.update_file');
Route::get('/structures/{id}/delete', [StructureController::class, 'destroy'])->middleware('auth')->name('structures.delete');
