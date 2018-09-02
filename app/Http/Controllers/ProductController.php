<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(Request $request){     
        $products=Product::paginate(5);
        return view('products',compact('products'))->with('i', ($request->input('page', 1) - 1) * 5);
    }
}
