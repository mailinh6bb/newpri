<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class CheckLogin
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
        // kiểm tra $type ở config-> auth ->gaurd 
        if (!Auth::user()) {
        return redirect()->route('get.user.login');
        }
        return $next($request);
    }
}
