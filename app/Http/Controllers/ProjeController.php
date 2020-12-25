<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Categories;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjeController extends Controller
{
    public function index()
    {
        $categories=Categories::all();
        $products=Product::all();
        $sliders=Slider::all();
        $banners=Banner::all();
        $blogs=Blog::all();
        $uruns=Product::where('id','<','5')->limit(3)->get();
        $datas=Product::where('id','>','5')->limit(3)->get();
        //$uruns= DB::table('products')->take(4)->get();

        return  view('proje.index',compact('categories','products','sliders','banners','blogs','uruns','datas'));
    }
    public function  login()
    {
        return view('login.index');
    }
}
