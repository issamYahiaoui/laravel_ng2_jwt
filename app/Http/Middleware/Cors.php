<?php

namespace App\Http\Middleware;

use Closure;

class Cors
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
        return $next($request)
            ->header('Access-Control-Allow-Origin',"*" ) // allow all  origin
            ->header('Access-Control-Allow-Methods','POST,PUT,PATCH,DELETE,PUT,OPTIONS') // allow all methods
            ->header('Access-Control-Allow-Headers','Content-Type,Authorization') // for using  " application/json"
            ->header('Access-Control-Allow-Headers','X-Requested-With ') ;  // for using  " application/json"
    }
}
