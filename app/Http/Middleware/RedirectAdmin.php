<?php

namespace App\Http\Middleware;

use Closure;

class RedirectAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'admin')
    {
        if (!auth()->guard($guard)->check()) {
            $request->session()->flash('error', 'Anda harus Sign in terlebih dahulu');
            return redirect(route('admin.login'));
        }
        return $next($request);
    }
}
