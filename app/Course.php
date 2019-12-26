<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $table ="courses";

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }
}

