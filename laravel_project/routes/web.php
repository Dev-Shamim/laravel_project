<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/single-blog', function () {
    return view('single-blog');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
