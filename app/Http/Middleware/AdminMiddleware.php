<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
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
        if (Auth::user()->username == 'admin') {
            return $next($request);
        } else {
            redirect("/home")->with('status', 'You are not allowed to log in on the Dashboard.');
        }
    }
}
