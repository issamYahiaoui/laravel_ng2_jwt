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
            // Solvig the Cors problem
            ->header('Access-Control-Allow-Origin','*') // allow all  origin
            ->header('Access-Control-Allow-Methods','POST,PUT,PATCH,DELETE,PUT,OPTIONS') // allow all methods
            ->header('Access-Control-Allow-Heaaders','Content-type : Authorization') ; // for using  " application/json"
    }
}
