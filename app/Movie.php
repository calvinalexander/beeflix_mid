<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function Genre(){
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function Episode(){
        return $this->hasMany(Episode::class);
    }
}
