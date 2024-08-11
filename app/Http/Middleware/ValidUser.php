<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;

class ValidUser
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
        $path = $request->path();                        
        if(Session::get('uid') && $path == "userlogin"){            
            return redirect('/home');
        }else if($path != "userlogin " && !Session::get('uid') && $request->method() != 'POST'){
            return redirect('/');
        }
        return $next($request);
    }
}