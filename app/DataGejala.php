<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataGejala extends Model
{
    protected $fillable = [
        'kode_gejala','nama_gejala'
    ];
}
