<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller{
    public function index(){
            $users = [
                [
                    "id" => 1,
                    "nama" => "Abu Bakar",
                    "umur" => 35
                ],
                [
                    "id" => 2,
                    "nama" => "Umar",
                    "umur" => 37
                ],
                [
                    "id" => 3,
                    "nama" => "Utsman",
                    "umur" => 32
                ],
                [
                    "id" => 4,
                    "nama" => "Ali",
                    "umur" => 30
                ]
                ];
        
            return view('users.users', [
                'users'=>$users
            ]);
    }

    public function show(string $id){
        $users =[
            [
                "id" => 1,
                "nama" => "Abu Bakar",
                "umur" => 35
            ],
            [
                "id" => 2,
                "nama" => "Umar",
                "umur" => 37
            ],
            [
                "id" => 3,
                "nama" => "Utsman",
                "umur" => 32
            ],
            [
                "id" => 4,
                "nama" => "Ali",
                "umur" => 30
            ]
        ];

        $result = null;
        foreach($users as $user){
            if ($user['id'] == $id) {
                $result = $user;
            }
        }
    
        return view('users.detail',[
            'user' => $result
            
        ]);

        dd($result);
    }

    //menampilkan view form
    public function create(){
        return view('users.create');
    }

    public function store(Request $request){

        /*VALIDASI MANUAL
        $payload    = $request->all();
        if ($payload['nama']==null || $payload['umur']==null) {
            return view('users.create',['error' => "input salah"]);
        }    
        return view ('users.create',[
            'payload' => $payload,
        ]);

        */

        //VALIDASI laravel
        $payload = $request->validate([
            'nama' => ['required', 'min:3'],
            'umur' => ['required', 'min:1', 'integer'],

            //validasi untuk memproses upload file
            'gambar' => ['required', 'file', 'extensions:png,jpg,jpeg']

        ]);

        if ($request->hasFile('gambar')) {
            $image  = $request->file('gambar');
            $imageName = time() . "-" . $image->hashName();
            $image->move('image/', $imageName);
        }

        return view ('users.create',[
            'payload' => $payload,
        ]);
    }

}
