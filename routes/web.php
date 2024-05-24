<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('admin.app');
});

Route::get('/guru', function () {
    return view('admin.guru');
});

Route::get('/login', fn() => view('auth.login'));


/* use App\Http\Controllers\AdminController;
Route::get('/', [AdminController::class,'dashboard']); */