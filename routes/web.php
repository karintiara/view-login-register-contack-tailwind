<?php

use Illuminate\Support\Facades\Route;

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('register');
});

