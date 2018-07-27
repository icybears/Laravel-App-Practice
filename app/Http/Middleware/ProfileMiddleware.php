<?php

namespace App\Http\Middleware;

use Closure;

class ProfileMiddleware
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
        if(auth()->id() == $request->route('user')->id)
        {
            return $next($request);        
        } else {
            return back();
        }
    }
}
