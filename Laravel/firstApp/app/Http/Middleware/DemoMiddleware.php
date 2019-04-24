<?php

namespace App\Http\Middleware;

use Closure;

class DemoMiddleware
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
        // before handling
        // if ($request->getUser() == 'asd') {
        //     return;
        // }

        $resp = $next($request);
        return $resp->withCookie(cookie()->forever('session', 'good'));

        // after handling
        // $request->cookies->add(['session', 'good']);
    }
}
