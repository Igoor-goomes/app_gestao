<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sitecontato;
use Symfony\Component\Console\Input\Input;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato (Request $request)
    {
        $motivo_contatos = MotivoContato::all();

        // dd($motivo_contatos);

        return view('site.contato',['motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request)
    {
       
        $regras_validacao = [

            'nome'           => 'required',
            'telefone'       => 'required|unique:site_contatos',
            'email'          => 'email|unique:site_contatos',  //validação de email
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required',
            
        ];

        $regras_feedback = [
            
            'nome.required' => 'O campo deve ser preenchido',
            'telefone.required' => 'O campo deve ser preenchido',
            'telefone.unique' => 'O telefone informado já encontra-se em nossa base de dados',
            'email.email' => 'O e-mail informado não é válido',
            'email.unique' => 'O e-mail informado já encontra-se em nossa base de dados',
            'motivo_contatos_id.required' => 'Selecione uma das opções',
            'mensagem.required' => 'Campo não pode ser enviado em branco'
        ];
        // validação dos dados do recebidos do formulário
        $request->validate($regras_validacao,$regras_feedback);
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }

}
