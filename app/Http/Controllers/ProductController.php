<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function product()
    {
        $products = DB::table("products")->take(12)->get();
        return view('front.layouts.product',compact('products'));
    }
}
