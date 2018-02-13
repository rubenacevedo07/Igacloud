<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
    if (Auth::guest()) {
        return redirect('/admin/login');
    }

    if ( $request->user()->hasRole('client')) {

        Session::flash('error', 'Usted no puede acceder al panel de administración! Contáctese con nosotros para mas información.');
        return redirect('/admin/logout');
    }
    

    return $next($request);
    }

}
