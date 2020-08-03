<?php

namespace App\Http\Middleware;

use Closure;

class BackendAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (!auth()->guard($guard)->check() || $this->currentUserIsNotActive()) {
            auth()->logout();
            return redirect()->route('BE_LOGIN_FORM');
        }

        return $next($request);
    }

    /**
     * Determine whether the current user's status was changed to inactive (0) while they were in active session so they get logged out
     * @return bool
     */
    private function currentUserIsNotActive()
    {
        return ! auth()->guard()->user()->active;
    }
}
