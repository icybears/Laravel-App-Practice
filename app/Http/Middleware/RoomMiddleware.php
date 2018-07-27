<?php

namespace App\Http\Middleware;

use Closure;

class RoomMiddleware
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
        if ( auth()->id() == $request->route('room')->user_id ){
            return $next($request);        
        } 
         else 
        {
            return back();
        }
    }
}
