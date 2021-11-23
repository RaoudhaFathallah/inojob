<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Candidat
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        

        if (Auth::user()->role_id == 1) {
            return redirect()->route('recruteurs.inscription-recruteur');
        }

        if (Auth::user()->role_id == 2) {
            return $next($request);
        }
    }

}
