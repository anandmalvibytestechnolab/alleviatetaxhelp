<?php

namespace App\Http\Middleware;

class SecureConnection
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, $next)
    {
        if (config('app.env') == 'production' && !$request->isSecure() && ! config('app.DISABLE_SECURE_BACKEND_CONNECTION')) {
            return redirect($request->path(), 302, [], true);
        }

        return $next($request);
    }
}
