<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;

class FornecedorController extends Controller
{
    public function index ()
    {
        return view('app.fornecedor.index');
    }

    public function show (Request $request)
    {
        // dd($request->all());
        $fornecedores = Fornecedor::where('nome','like','%'.$request->input('nome').'%')
            ->where('cnpj','like','%'.$request->input('cnpj').'%')
            ->where('email','like','%'.$request->input('email').'%')
            ->where('uf','like','%'.$request->input('uf').'%')
            ->paginate(10); //parâmetro de paginação

        // dd($fornecedores);
        return view('app.fornecedor.show',['fornecedores' => $fornecedores, 'request' => $request->all()]);
    }

    public function create (Request $request)
    {
        $msg = '';

        // Inclusão do fornecedor

        if($request->input('_token') != '' && $request->input('id') == ''){
            //Validando os dados
            $regras_app_fornecedor = [
                'nome' => 'required',
                'cnpj' => 'required',
                'email' => 'email',
                'uf' => 'required|min:2|max:2'
            ];

            $feedback_app_fornecedor = [
                'nome.required' => 'O preechimento do campo nome é obrigatório',
                'cnpj.required' => 'O preechimento do campo cnpj é obrigatório',
                'email.email'   => 'O preenchimento do campo email é obrigatório',
                'uf.required'   => 'O preenchimento do campo uf é obrigatório',
                'uf.min'        => 'O campo uf deve possuir no mínimo 2 caracteres',
                'uf.max'        => 'O campo uf deve possuir no máximo 2 caracteres'
            ];

            $request->validate($regras_app_fornecedor, $feedback_app_fornecedor);

            //Passando valores preenchidos para o banco
            Fornecedor::create([
                'nome'  => $request->nome,
                'cnpj'  => preg_replace('/\D/','', $request->cnpj) , //método preg_replace('/\D/','',$request->campo)|retira os caracteres especiais
                'email' => $request->email,
                'uf'    => $request->uf
            ]);

            //mensagem de sucesso
            $msg = 'Cadastro realizado com sucesso!';
        }

        // Edição do fornecedor

        if($request->input('_token') != '' && $request->input('id') != ''){
            $fornecedor = Fornecedor::find($request->input('id'));
            $update_fornecedor = $fornecedor->update($request->all());

            //validando update

            if($update_fornecedor){
                $msg = 'Atualização dos dados realizada com sucesso';
            } else {
                $msg = 'Erro ao tentar atualizar dados';
            }

            return redirect()->route('app.fornecedor.edit',['id' => $request->input('id'), 'msg' => $msg]);
        }

        return view('app.fornecedor.create',['msg' => $msg]);
    }

    public function edit ($id, $msg = '')
    {
        $fornecedor = Fornecedor::find($id);

        return view('app.fornecedor.create', ['fornecedor' => $fornecedor, 'msg' => $msg]);
    }

    public function delete ($id)
    {
        // Fornecedor::find($id)->delete();
        
        Fornecedor::find($id)->delete();

        return redirect()->route('app.fornecedor');
    }

}
