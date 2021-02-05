<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $products = DB::table("products")->take(8)->get();
        return view('front.layouts.main',compact('products'));
   }
}
