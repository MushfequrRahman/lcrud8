<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
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
        if(auth()->check()){
            if(!auth()->user()->name && !auth()->user()->password){
                return redirect()->route('getLogin')->with('error','You Have To be Admin User To Access This Page');

            }

        }else{
            return redirect()->route('getLogin')->with('error','You Have To be Logged In To Access This Page');
        }
        return $next($request);
    }
}
