<?php

namespace App\Http\Middleware;

use Closure;

class SetDefaultLanguage
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
        if(!$request->session()->has('lang'))
        {
            $request->session()->put('lang','cn');
        }
        return $next($request);
    }
}
