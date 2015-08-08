<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class admincheckMiddleware
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
        $admin = Auth::user()->admin;
        if ($admin == 1) {
            return $next($request);
        }else{
            return redirect('user');
        }
    }
}
