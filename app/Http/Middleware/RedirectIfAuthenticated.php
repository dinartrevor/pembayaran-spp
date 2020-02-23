<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // dd($request);
        
        // if (in_array($request->user()->level, $roles)) {
        //     if ($request->user()->level('admin')) {
        //         return redirect('/');
        //     }elseif ($request->user()->level('employee')) {
        //         return redirect('/admin/petugas');
        //     }else{
        //         return redirect('/home');
        //     }
        //     return $next($request);
        // }
        // return redirect('/');
        if (Auth::guard($guard)->check()) {
            dd($guard);
            return redirect('/home');
        }

        return $next($request);
    }
}
