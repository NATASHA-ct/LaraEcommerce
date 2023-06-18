<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   function index()
    {
    //     $data= Product::all();

    //    return view('product',['products'=>$data]);
    return ('PRODUCT PAGE, YOU ARE LOGGED IN');
    }
}
