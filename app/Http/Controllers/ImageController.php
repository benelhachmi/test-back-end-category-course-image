<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
Use App\Image;
class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $image = new Image();
            if($request->hasFile('image')){
                $image->file_name = $request ->image->store('image');
            }
        $image->imageable_id = $request->resource_id;
        $image->imageable_type = $request->resource;
        $image->created_at = now();
        $image->updated_at = now();
        
       return response()->json($image, 200);
    }
}
