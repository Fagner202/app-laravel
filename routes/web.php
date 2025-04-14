<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('test');
});

// Route to show the registration form
Route::get('/register', function () {
    return view('auth.register');
});
