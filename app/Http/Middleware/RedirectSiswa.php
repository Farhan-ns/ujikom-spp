<?php

namespace App\Http\Middleware;

use Closure;

class RedirectSiswa
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'siswa')
    {
        if (!auth()->guard($guard)->check()) {
            $request->session()->flash('error', 'Anda harus Sign In terlebih dahulu');
            return redirect(route('siswa.login'));
        }
        return $next($request);
    }
}
