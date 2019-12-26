<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use App\Image;
Use App\Course;

class Category extends Model
{
    public $table ="categories";
    
    public function course(){
        return $this->hasmany('App\Course');
    }
    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }
}
