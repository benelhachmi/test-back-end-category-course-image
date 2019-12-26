<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator;

use App\Category;
use App\Image;
use App\Course;

class CategoriesTableSeeder extends Seeder
{
    public function run(){    

        

        $faker = Faker\Factory::create();

        for ($i=0; $i<15; $i++ ){

            $category = new Category();
            $category->name = $faker->name;
            $category->slug = $faker->slug;
            //$category->slug = Str::random(40);
            $category->save();

            $image = new Image();
            $image->file_name = $faker->name;
            $image->imageable_type = "app\Category";
            $image->imageable_id = $category->id;

            $image->save();

            $course = new Course();
            $course->category_id= $category->id;
            $course->name = $faker->name;
            $course->description = $faker->paragraph(1);
            $course->slug = $faker->slug;
            $course->save();


        }
        }
}