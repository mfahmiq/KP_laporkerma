<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/kerma', function () {
    return view('kerma');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/profile', function () {
    return view('profile');
});
