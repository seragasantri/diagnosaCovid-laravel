<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataRole extends Model
{
    protected $fillable = ['email','kode_gejala1','kode_gejala2','kode_gejala3','kode_gejala4','kode_gejala5',
    'kode_gejala6', 'kode_gejala7','kode_gejala8','kode_gejala9','kode_gejala10','kode_diagnosis',
    'hasil','tanggal'];

    
}
