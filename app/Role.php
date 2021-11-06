<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "data_roles";

    public function hasil()
    {
        return $this->belongsToMany('App\Gejala');
    }
}
