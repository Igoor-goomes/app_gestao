<?php

namespace App\Http\Controllers;

use App\Produto;
use App\ProdutoDetalhe;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class ProdutoController extends Controller
{
    public function index (Request $request)
    {
        $produtos = Produto::paginate(10);

        return view('app.produto.index',['produtos'=>$produtos,'request'=>$request->all()]);
    }

    public function create ()
    {
        return view('app.produto.create');
    }

    public function store (Request $request)
    {
        $validacao_produto = [

            'no_produto' => 'required',
            'ds_produto' => 'required',
            'vl_mercado' => 'required',
            'qt_produto' => 'required',
            'no_marca'   => 'required',
            'ds_modelo'  => 'required',
            'nr_serie'   => 'required'
        ];

        $feedback_produto = [

            'no_produto.required' => 'O preenchimento do campo nome é obrigatório',
            'ds_produto.required' => 'O preenchimento do campo descrição produto é obrigatório',
            'vl_mercado.required' => 'O preenchimento do campo valor de mercado é obrigatório',
            'qt_produto.required' => 'O preenchimento do campo quantidade em estoque é obrigatório',
            'no_marca.required' => 'O preenchimento do campo marca é obrigatório',
            'ds_modelo.required' => 'O preenchimento do campo modelo é obrigatório',
            'nr_serie.required' => 'O preenchimento do campo número de serie é obrigatório'
        ];

        $request->validate($validacao_produto, $feedback_produto);

        try {
            Produto::create([
                'no_produto' => $request->no_produto,
                'ds_produto' => $request->ds_produto,
                'vl_mercado' => $request->vl_mercado,
                'qt_produto' => $request->qt_produto
            ]);

            $produto = Produto::orderBy('id', 'DESC')->first();

            ProdutoDetalhe::create([
                'produto_id' => $produto->id,
                'no_marca'   => $request->no_marca,
                'ds_modelo'  => $request->ds_modelo,
                'nr_serie'   => $request->nr_serie,
                'dt_entrada' => Carbon::now()
            ]);
        } catch (\Exception $th) {
            throw $th;
            //dd($th);
        }
        

        Alert::alert('','Cadastro do produto realizado com sucesso', 'success');

        return Redirect()->route('app.produto.index');
    }

    public function show ($id)
    {
        $produto = DB::table('produtos')->join('produto_detalhes','produtos.id','=','produto_detalhes.produto_id')->where('produtos.id','=',$id)->first();

        return view('app.produto.show', ['produto' => $produto]);
    }

    public function edit ($id)
    {
        $p = DB::table('produtos')->join('produto_detalhes','produtos.id','=','produto_detalhes.produto_id')->where('produtos.id','=',$id)->first();
       
        return view('app.produto.edit', ['produto' => $p]);
    }

    public function update (Request $request, $id)
    {
        
        Produto::where('id','=',$id)->update([
                
            'no_produto' => $request->no_produto,
            'ds_produto' => $request->ds_produto,
            'vl_mercado' => $request->vl_mercado

        ]);
        
        ProdutoDetalhe::where('produto_id','=',$id)->update([

            'no_marca'   => $request->no_marca,
            'ds_modelo'  => $request->ds_modelo

        ]);
        
        Alert::alert('','Alteração realizada com sucesso!','success');

        return Redirect()->route('app.produto.index');
    }

    public function destroy ($id)
    {
        ProdutoDetalhe::where('produto_id',$id)->delete();
        Produto::destroy($id);

        Alert::alert('','Baixa realizada!','success');

        return Redirect()->route('app.produto.index');
    }
}
