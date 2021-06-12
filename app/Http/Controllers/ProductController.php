<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //index function
    public function index(){
        return view('pages.index');
    }
}
