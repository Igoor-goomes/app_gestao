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

            'nome'           => 'required|min:3|max:100|unique:site_contatos',
            'telefone'       => 'required',
            'email'          => 'email',  //validação de email
            'motivo_contatos_id' => 'required',
            'mensagem'       => 'required|max:2000'
            
        ];

        $regras_feedback = [
            
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome precisa ter no máximo 100 caracteres',
            'nome.unique' => 'O nome informado já está em uso',
            'email.email' => 'O e-mail informado não é válido',
            
            'mensagem.max' => 'A mensagem deve ter no máximo 2000 caracteres',
            'required' => 'O campo :attribute deve ser preenchido'
        ];
        // validação dos dados do recebidos do formulário
        $request->validate($regras_validacao,$regras_feedback);
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }

}
