<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Access\Response;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roleNames)
    {
        $hasRole = false;
        
        foreach ($roleNames as $roleName) {
            $roleName = strtolower($roleName);
            if (Auth::user()->hasRole($roleName)) {
                $hasRole = true;
                break;
            }
        }

        if(!$hasRole){
            return abort(403);
        }

        return $next($request);
    }
}
