<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class IsAdmin
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
        // dd(IsAdmin());
        //  if (Auth::user() &&  Auth::user()->group == 'Superadmin') {
        //if (!Auth::check() && auth()->user()->IsAdmin()) {
               
        // }abort(403);
      
        //return redirect('/login')->with('error','You have not admin access'); 
        //return $next($request);
      
           
            if (Auth::check() && Auth::user()->group == 'Superadmin' || Auth::user()->group == 'Admin') {
            // dd('hh');
                
                return $next($request); 
                
            }
           
        return redirect('/login');
          
        
        
     }
}
