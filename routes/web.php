<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/login', fn() => view('auth.login'));
Route::get('/guru', fn() => view('admin.guru'));
Route::get('/', fn() => view('admin.app'));


//route CRUD
Route::get('/civitas',[UserController::class,'index']);

//route untuk menyimpan
Route::post('/civitas/store',[UserController::class,'store']);

//route untuk menambah
Route::get('/civitas/tambah',[UserController::class,'tambah']);

//route untuk update
Route::get('/civitas/edit/{id}',[UserController::class,'edit']);

	
Route::post('/civitas/update',[UserController::class,'update']);

//route untuk delete
Route::get('/civitas/hapus/{id}',[UserController::class,'hapus']);

//return view('index',['users' => $users]);


/* use App\Http\Controllers\AdminController;
Route::get('/', [AdminController::class,'dashboard']); */