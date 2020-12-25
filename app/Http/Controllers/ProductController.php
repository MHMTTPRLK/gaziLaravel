<?php

namespace App\Http\Controllers;

use App\Exports\ProductExport;
use App\Helpers\UploadPaths;
use App\Models\Categories;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use function Symfony\Component\String\s;

class ProductController extends Controller
{

    public  function  export()
    {
        return Excel::download(new ProductExport,'products.xlsx');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $products=Product::all();
       // return $products=Product::with(['user'])->get();
      return $products=Product::with(['user'])->select('id','productName')->get();

//        $products=Product::with(['user'])->Paginate(2); // sayılı olan
       //$products=Product::with(['user'])->simplePaginate(2); // next previous  olan


       // return  view('products.index',  compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $users=User::all();
        $categories=Categories::all();
     return  view('products.urun_ekle',compact('categories','users'));

    }

    public function createProducts(Request $request)
    {

        $name=$request->get("productName");
        $category_id=$request->category_id;
        $price=$request->get("price");
        $created_by=auth()->user()->id;
        $fileUrl= $request->file('photo');

        if(isset($fileUrl))
        {
            $productPhotoName=uniqid('product_').'.'.$fileUrl->getClientOriginalExtension();
            $fileUrl->move(UploadPaths::getUploadPath('products_photos'),$productPhotoName);
        }
        /*else{
          //  $productPhotoName=''; resim yoktur cinsten
        }*/
     Product::create([
            'productName'=>$name,
            'category_id'=>$category_id,
            'price'=>$price,
            'created_by'=>$created_by,
            'photo'=>$productPhotoName
        ]);
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $name=$request->get("productName");
        $category_id=$request->category_id;
        $price=$request->get("price");
        $created_by=$request->user_id;
        Product::create([
           'productName'=>$name,
           'category_id'=>$category_id,
           'price'=>$price,
           'created_by'=>$created_by

        ]);
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
