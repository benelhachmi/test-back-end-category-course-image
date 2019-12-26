<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use App\Category;
Use App\Course;

class Image extends Model
{
    public function imageable()
    {
        return $this->morphTo();
    }
}
