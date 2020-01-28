<?php

namespace App\Http\Middleware;

use Closure;

class Apps
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
        if(auth()->check() and $request->user()->level==3){
            $next($request); 
        }
        return redirect()->guest('/home');
    }
}
