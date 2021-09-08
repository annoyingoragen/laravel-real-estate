<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
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
        ddd(session('role_id'));
        if (session('role_id')===1)
        {
            
        return $next($request);
        }
        else{
            session()->flush();
            return redirect()->route('login');
        }

        return $next($request);
    }
}
