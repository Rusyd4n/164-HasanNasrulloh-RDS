<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index', ['title' => 'ini halaman admin']);
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function guru(){
        return view('admin.guru');
    }
}
