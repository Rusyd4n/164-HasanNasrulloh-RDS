<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/user/{id}/{nama}", function($id,$nama){
    return[
        "id" => $id,
        "nama" => $nama
    ];
});

Route::any("detail", function () {
  $users   = [
    [
    "id" => 1,
    "name" => "abdul",
    "age" => 30
    ],

    [
        "id" => 2,
        "name" => "syahrul",
        "age" => "35"
    ],

    [
        "id" => 3,
        "name" => "usman",
        "age" => 34
        ]
    ];

    $result = [];
    foreach($users as $users){
        if($users["id"] == 3){
            array_push($result, $users);
        }
        if ($result == []){
            return "Data tidak ditemukan";
        }
    }

    return $result;


});

