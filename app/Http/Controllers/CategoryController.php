<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Slider;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class CategoryController extends Controller
{
    public function  index()
    {
        $categories=Categories::all();


            return view('category.index',compact('categories'));
    }
    public function  create(Request $request)
    {
       $category_name= $request->category_name;
        Categories::create([
            'name'=>$category_name,


        ]);
        return back();
    }

}
