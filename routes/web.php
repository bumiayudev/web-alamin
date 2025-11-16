<?php

use Illuminate\Support\Facades\Route;

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
