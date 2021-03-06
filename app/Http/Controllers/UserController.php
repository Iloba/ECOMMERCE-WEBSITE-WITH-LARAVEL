<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //Login User
    public function loginUser(Request $request){

        //Validate Form
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

  

      //Check if Email Exists and fetch all data  
      $user = User::where(['email' => $request->email])->first();
      

        //Compare user Password and Pasword in Database
        //if user exists continue to check for password confirmation
        if($user){
            //Check if password matches
            if(!Hash::check($request->password, $user->password)){
                return back()->with('error', 'Incorrect Password');
            }else{
        
                //Create Session
                $request->session()->put('user', $user);
                return redirect()->route('home');
                
            }
        }else{
            return back()->with('error', 'User records not found');  
        } 
    }



    public function logoutUser(){
        Session::forget('user');
        return redirect()->route('login');
    }

    //Register User
    public function registerUser(Request $request){
       
        //to register a user, we have to validate the request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed', 
        ]);

        //Register User
        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        //Start Sesssion
        $request->session()->put('user', $user);
         return redirect()->route('home');


    }

}
