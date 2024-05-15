<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'));
Route::get('/admin', fn() => view('users.admin'));
Route::get('/guru', fn() => view('users.guru'));
Route::get('/siswa', fn() => view('users.siswa'));
Route::get('/login', fn() => view('auth.login'));
Route::get('/navbar', fn() => view('components.navbar'));