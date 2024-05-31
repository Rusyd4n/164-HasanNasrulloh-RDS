<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CivitasController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AuthController;


Route::get('/guru', fn() => view('admin.guru'));

Route::controller(AuthController::class)->group(function(){
    Route::get('/login','loginPage')->name('loginPage');
    Route::post('/login', 'login')->name('login');
    Route::get('/logout','logout')->name('logout');
});

//grouping route by controller Civitas
Route::controller(CivitasController::class)->group(function(){
    Route::get('/civitas','index');
    Route::post('/civitas/store','store');
    Route::get('/civitas/tambah','tambah');
    Route::get('/civitas/edit/{id}','edit');
    Route::post('/civitas/update','update');
    Route::get('/civitas/hapus/{id}','hapus');
});


//grouping route by controller Pegawai
Route::controller(PegawaiController::class)->group(function(){
    Route::get('/pegawai','index');
    Route::get('/pegawai/tambah','tambah')->name('tambah');
    Route::post('/pegawai/store','store');
    Route::get('/pegawai/edit{id}','edit');
    Route::post('/pegawai/update{id}','update');
    Route::post('/pegawai/hapus{id}','delete');
});


//route untuk kasus JDA
//grouping route by controller User
Route::controller(UserController::class)->group(function(){
    Route::get('/users','index')->name('users');
    Route::get('/users/create', 'create')->name('users.create');
    Route::get('/users/{id}','show')->name('users.detail');
    Route::post('/users','store')->name('users.store');
}); 

Route::resource('roles', RoleController::class);


/* use App\Http\Controllers\AdminController;
Route::get('/', [AdminController::class,'dashboard']); */