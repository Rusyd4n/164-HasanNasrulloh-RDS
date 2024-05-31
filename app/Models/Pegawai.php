<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawai";
    //Mass Assignment -> untuk menentukan kolom mana yang mau diinput
    //kolom yang tidak boleh diinput bisa pakai $guarded 
    protected $fillable = ['nama','alamat'];
}
