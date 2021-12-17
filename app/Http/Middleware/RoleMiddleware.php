<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
            // $roles = Auth::user()->role->pluck('name')->toArray();
            // if (in_array($Admin, $roles)) {
            //     return $next($request);
            // } else if (in_array($Stuff, $roles)) {
            //     return $next($request);
            // } else if (in_array($User, $roles)) {
            //     return $next($request);
            // }
            // return redirect('home');

            $roles = Auth::user()->role->pluck('name')->toArray();
            if (in_array($role, $roles) === FALSE) {
                return redirect()->route('home');
            }
            return $next($request); 
    }
}
