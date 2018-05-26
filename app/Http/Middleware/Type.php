<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Type
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $type)
    {
        // Not Logged
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Not allowed
        if ($request->user()->type < $type) {
            return abort(404);
        }
        return $next($request);
    }
}
