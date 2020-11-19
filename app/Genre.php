<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function Movie(){
        return $this->hasMany(Movie::class);
    }
}
