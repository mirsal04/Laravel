<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        if(auth()->check() and $request->user()->level==1 or $request->user()->level==2){
            return $next($request); 
        }
        return redirect()->guest('/admin');
    }
}
