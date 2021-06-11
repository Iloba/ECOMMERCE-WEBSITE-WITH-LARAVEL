<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Login User
    public function loginUser(Request $request){
        dd($request->input());
    }
}
