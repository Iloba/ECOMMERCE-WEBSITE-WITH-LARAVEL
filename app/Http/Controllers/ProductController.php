<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //index function
    public function index(){
     $products = Product::all();
        return view('pages.index', 
    [
        'products' => $products
    ]);
    }
}
