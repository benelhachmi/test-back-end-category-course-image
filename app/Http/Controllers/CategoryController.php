<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Category;
Use App\Course;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json(['status' => 'success',  'message' => 'Categories indexed successfully!' , 'categories' => $categories]); 
    }
 
    public function show($slug)
    {
       // return Category::find($id)
       //200
       $category = Category::where('slug', '=', $slug)->first();
       return  ($category) ? response()->json(['status' => 'success', 'message' => 'Category retrieved successfully!', 'Category' => $category])
                : response()->json(['status' => 'error',  'message' => 'Resource not found']);
    
    }

    public function store(Request $request)
    {
        return Category::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());

        return $category;
    }

    public function delete(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return 204;
    }
}