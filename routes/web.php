<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('admin.master');
});


Route::get('/admin', fn() => view('users.admin'));
Route::get('/guru', fn() => view('admin.guru'));
Route::get('/siswa', fn() => view('users.siswa'));
Route::get('/login', fn() => view('auth.login'));
Route::get('/navbar', fn() => view('components.navbar'));

Route::get('/navbar', fn() => view('components.navbar'));


/* use App\Http\Controllers\AdminController;
Route::get('/', [AdminController::class,'dashboard']); */