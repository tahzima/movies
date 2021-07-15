<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectionUser
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
        if ($request->user()->role == 'admin')
        {
            return redirect('/admin');
        // return view('page.admin');
        }
        if ($request->user()->role == 'user')
        {
            return redirect('/');
            // return view('page.user');
        }
        if ($request->user()->role == NULL)
        {
        dd('role is Null');
        }
        else{
            dd('hello mother f****r');
        }

        // if (Auth::user()->role==="user") {
        //     // return redirect(RouteServiceProvider::HOME);
        //     return redirect('/user');
        // }else{
        //     return redirect('/admin');
        // }
        
        return $next($request);
    }
}
