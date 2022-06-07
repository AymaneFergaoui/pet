<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //

    function index()
    {
        $products = DB::table('products')->get();
        return view('index', ['products'=>$products]);
    }

    public function single_product(Request $request,$id)
    {
        $product_array = DB::table('products')->where('id',$id)->get();
        return view('single_product', ['product_array'=>$product_array]);
    }

    public function products(Request $request)
    {
        $product_array = DB::table('products')->get();
        return view('products', ['product_array'=>$product_array]);
    }
}
