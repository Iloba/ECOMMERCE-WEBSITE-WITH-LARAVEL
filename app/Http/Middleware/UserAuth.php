<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //Redirect user back to home page if already logged in
        if($request->path() == 'login' && $request->session()->has('user')){
            return redirect()->route('home')->with('error', 'you are already logged in');
        }


        return $next($request);
    }
}
