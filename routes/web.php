<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'));
Route::get('/login', fn() => view('auth.login'));
