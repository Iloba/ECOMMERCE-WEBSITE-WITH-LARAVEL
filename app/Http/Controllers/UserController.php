<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //Login User
    public function loginUser(Request $request){

      //Check if Email Exists and fetch all data  
      $user = User::where(['email' => $request->email])->first();
      

    //Compare user Password and Pasword in Database
    //if user exists continue to check for password confirmation
    if($user){
        if(!$user || !Hash::check($request->password, $user->password)){
            return back()->with('error', 'Incorrect Password');
        }else{
    
            //Create Session
            $request->session()->put('user', $user);
            return redirect()->route('home');
            
        }
    }else{
        return back()->with('error', 'user records not found');  
    }
   
      

      
    }
}
