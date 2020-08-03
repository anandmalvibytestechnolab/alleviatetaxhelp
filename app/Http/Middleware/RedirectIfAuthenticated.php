<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $route_name = request()->route()->getName();

        if (auth()->guard($guard)->check() && auth()->user()->active == 1 && $route_name !== 'BE_LOGOUT') {
            return redirect(route('BE_DASHBOARD_SHOW'));
        }

        return $next($request);
    }
}
