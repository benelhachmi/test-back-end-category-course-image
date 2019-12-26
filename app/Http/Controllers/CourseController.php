<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Category;
Use App\Course;

class CourseController extends Controller
{
    public function index()
    {
        return Course::all();
    }
 
    public function show($id)
    {
        return Course::find($id);
    }

    public function store(Request $request)
    {
        return Course::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->update($request->all());

        return $course;
    }

    public function delete(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return 204;
    }
}
