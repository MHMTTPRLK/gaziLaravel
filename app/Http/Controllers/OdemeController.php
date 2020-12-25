<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OdemeController extends Controller
{

    public function  index()
    {
        return view('odeme');
    }

    public function  donus()
    {
        return view('donus');
    }
}
