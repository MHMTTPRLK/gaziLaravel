<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function hakkimda()
    {
    //$name='Mehmet Parlak';
        //$veriler=DB::table('users')->get(); db query
        $veriler=User::all();                 // model ile alım
        //$username=DB::table('users')->first();
        //$name=$username->name;
    //$job='Bilgisayar Mühendisi';
    //$city='Mersin';
    //return view('hakkimda',compact('name','job','city'));
    return view('hakkimda',compact('veriler'));
    }
    public  function  urunler()
    {
       $products=Product::all();
        return view('urunler',compact('products'));
    }
    public  function  users_product()
    {
        $datam=DB::table('user_products')
                    ->join('users','user_products.user_id',"=",'users.id')
                    ->join('products','user_products.product_id','=','products.id')
                    ->select('user_products.*','users.name','products.productName','products.price')
                    ->get();


        return view('user_products',compact('datam'));

    }
    public function  index()
    {
        return view('home');
    }
    public function  admin1()
    {
        return view('layouts.back.master');
    }

    public function  dashboard()
    {
        $users=User::all();
        $categories=Categories::all();
        return view('layouts.back.dashboard',compact('categories','users'));
    }
}
