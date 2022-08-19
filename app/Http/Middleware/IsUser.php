<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class IsUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);
        if (Auth::check() && Auth::user()->group == 'Editor' ||  Auth::user()->group == 'WebUser') {
            return $next($request); 
        }
            // return back();
            return redirect('/');
        
    }
}
