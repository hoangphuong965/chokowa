<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if (request()->is('admin/*') || request()->is('admin')) {
                    return redirect('admin/home');
                }
                if (request()->is('station/*') || request()->is('station')) {
                    return redirect('company/home');
                }
                if (request()->is('nurse/*') || request()->is('nurse')) {
                    return redirect('nurse/home');
                }
                return redirect()->route('welcome');
            }
        }

        return $next($request);
    }
}
