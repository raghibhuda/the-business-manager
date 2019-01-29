<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class isCompany
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
        
        // if(Auth::check() && Auth::user()->type == "project-manager"){
        //     return $next($request);
        // }else{
        //     return view('auth.login');
        // }


        

        // if(Auth::user()->type == 'project-manager'){
        //     return $next($request);
        // }

        // if(Auth::user()->type == 'employee') {
        //     return redirect('/employee/dashboard');    
        // }

        // return redirect('/login');

        // if($request->user() && $request->user()->type == 'project-manager') {
        //     return $next($request);
        // } else {
        //     return view('auth.login');
        // }

        // return $next($request);
        return $next($request);
    } 

    
}
