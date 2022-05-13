<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //pengecekan manual, jika user belum login(guest) maka gabisa akses categories, atau user bukan alghaz juga gabisa
        if (auth()->guest() || !auth()->user()->is_admin) {
            abort(403);
        }

        return $next($request);
    }
}
