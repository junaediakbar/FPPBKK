<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Pembeli
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
        if(auth()->user()->role== 2 or auth()->user()->role== 1){
            return $next($request);
        }
   
        return redirect('/dashboard')->with('error',"Only User and Admin can access!");
    }
}
