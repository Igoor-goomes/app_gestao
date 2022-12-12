<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index (Request $request)
    {
        $erro = '';
        
        if($request->get('erro') == 1) {
            $erro ='Usuário e ou senha não existe';
        }

        if($request->get('erro') == 2) {
            $erro ='Necessário realizar login para ter acesso a página';
        }

        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
    }

    public function autenticar (Request $request)
    {
        //regras de validação de acesso ao sistema
        $regra_login = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        $feedback_login = [
            'usuario.email'  => 'O campo usuário (e-mail) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ];

        $request->validate($regra_login, $feedback_login);

        //recuperação dos parâmetros do formulário de login
        $email = $request->get('usuario');
        $password = $request->get('senha');

        //Iniciar o Model User
        $usuario = User::where('email', $email)->where('password', $password)->get()->first();

        if($usuario) {
            Auth::login($usuario);
            return redirect()->route('app.dashboard');
        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }
    }

    public function sair ()
    {
        // session_destroy();
        Auth::logout();
        return redirect()->route('site.login');
    }
}
