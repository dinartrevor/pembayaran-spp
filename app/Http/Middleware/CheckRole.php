<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckRole
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
        dd($request);
        if (in_array($request->user()->level, $roles)) {
            if ($request->user()->level('admin')) {
                return redirect('/');
            }elseif ($request->user()->level('employee')) {
                return redirect('/admin/petugas');
            }else{
                return redirect('/home');
            }
            return $next($request);
        }
        return redirect('/');
    }
}
