<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CivitasController extends Controller
{
    public function index(){
        // GET data dari table pegawai
    	$civitas = DB::table('civitas')->get();
 
    	// VIEW data pegawai di view index
    	return view('index',['civitas' => $civitas]);
    }

    public function tambah(){
        //memanggil view tambah
        return view('tambah');
    }

    public function store(Request $request){
        //insert data ke table civitas
        DB::table('civitas')->insert([
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email
        ]);

        //redirect ke halaman civitas
        return redirect('/civitas');
    }

    public function hapus($id){
        //menghapus data civitas by id
        DB::table('civitas')->where('id',$id)->delete();

        //redirect ke halaman civitas
        return redirect ('/civitas');
    }

    public function edit($id){
        //GET data civitas by id
        $civitas = DB::table('civitas')->where('id',$id)->get();

        //passing data ke view edit.blade.php
        return view('edit',['civitas' => $civitas]);
    }

    public function update(Request $request){
        //update data civitas
        DB::table('civitas')->where('id',$request->id)->update([
            // 'photo' => $request->photo,
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email
        ]);

        //redirect ke halaman civitas
        return redirect ('/civitas');
    }
}
