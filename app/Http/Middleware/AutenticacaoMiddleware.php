<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao, $perfil)
    {
        //verifica se o usuário possui acesso a rota
        echo $metodo_autenticacao.'-'.$perfil.'<br>';

        if ($metodo_autenticacao == 'padrao'){
            echo 'Verificar o usuário e senha no banco de dados'.$perfil.'<br>';
        }

        if ($metodo_autenticacao == 'ldap'){
            echo 'Verificar o usuário e senha no AD'.$perfil.'<br>';
        }

        if ($perfil == 'visitante'){
            echo 'Exibi apenas alguns recursos';
        } else {
            echo 'Carregar o perfil do banco de dados';
        }

        if(false) {
            return $next($request);
        } else {
            return Response('Acesso negado! Rota exige autenticação!!!');
        }
        
    }
}
