<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VerificaToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $verifica = session('usuario_checkout');
        if(
            empty($verifica['api_token'])
         || empty($verifica['tipo_usuario'])
         || empty($verifica['token_checkout'])
         || is_null($verifica['id_usuario'])
        ){
            return redirect('/entrar');
        }else{
            return $next($request);
        }
    }
}
