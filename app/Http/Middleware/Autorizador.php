<?php

namespace App\Http\Middleware;

use Closure;

class Autorizador
{
    
    public function handle($request, Closure $next)
    {
        //A request não é para barra login e o cara é convidado
        if (!$request->is('login') && \Auth::guest()) 
        {

            //se não para a barra login e o cara for convidado redirect para a barra /login
            return redirect('/login');
        }

        return $next($request);
    }
}
