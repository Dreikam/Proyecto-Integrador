<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class adminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next)
     {
         $user = Auth::user();
       if ($user == true) {
           if ($request->user()->rol == 3) {
             return $next($request);
           } else {
             return redirect('/home');
           }
       } else {
           return redirect('/home');
       }

     }
}
