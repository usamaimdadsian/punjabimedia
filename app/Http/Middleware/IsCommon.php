<?php

namespace App\Http\Middleware;

use Closure;

class IsCommon
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
        if(!auth()->guest()){
            if(auth()->user()->Authority == 'common'){
                return $next($request);
            }
        }
        return redirect()->route('login');
    }
}
