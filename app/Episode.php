<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public function Movie(){
        return $this->belongsTo(Movie::class, 'movie_id');
    }
}
