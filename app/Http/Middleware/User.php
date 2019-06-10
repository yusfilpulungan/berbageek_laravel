<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if(Auth::guest())
        {
            return redirect('login');
        }

        if(\App\User::isRole($role)){
            return $next($request);
        }
        return abort(401);
    }
}
