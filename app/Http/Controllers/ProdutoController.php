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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $produtos = Produto::paginate(10);

        // dd($produtos);

        return view('app.produto.index',['produtos'=>$produtos,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.produto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Passando mensagem de cadastro produto ok

        if($request->input('_token') != '' && $request->input('id') == '') {

            $validacao_produto = [

                'no_produto' => 'required',
                'ds_produto' => 'required',
                'vl_mercado' => 'required',
                'qt_produto' => 'required',
                'no_marca'   => 'required',
                'ds_modelo'  => 'required',
                'nr_serie'   => 'required',
                'dt_entrada' => 'required'
            ];

            $feedback_produto = [

                'no_produto.required' => 'O preenchimento do campo nome é obrigatório',
                'ds_produto.required' => 'O preenchimento do campo descrição produto é obrigatório',
                'vl_mercado.required' => 'O preenchimento do campo valor de mercado é obrigatório',
                'qt_produto.required' => 'O preenchimento do campo quantidade em estoque é obrigatório',
                'no_marca.required' => 'O preenchimento do campo marca é obrigatório',
                'ds_modelo.required' => 'O preenchimento do campo modelo é obrigatório',
                'nr_serie.required' => 'O preenchimento do campo número de serie é obrigatório',
                'dt_entrada.required' => 'O preenchimento do campo data de entrada é obrigatório'
            ];

            $request->validate($validacao_produto, $feedback_produto);

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
                'dt_entrada' => Carbon::now(),
                'dt_saida'   => $request->dt_saida
            ]);
            

            Alert::alert('','Cadastro do produto realizado com sucesso', 'success');

        }

        return Redirect()->route('produto.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //dd($produto);
        return view('app.produto.show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        //
    }
}
