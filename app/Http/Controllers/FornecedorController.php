<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores =[
            0 => [
            'nome'=>'IGEPLAC',
            'status'=>'Ativo',
            'cnpj'=>'33.344.443/0001-20',
            'ddd'=>'',
            'telefone'=>'99572-1709'
            ],
            1 => [
                'nome'=>'UEG',
                'status'=>'Ativo',
                'cnpj'=>'34.355.553/0001-30',
                'ddd'=>'62',
                'telefone'=>'99570-7070'
            ],
            2 => [
                'nome'=>'FAFIBE',
                'status'=>'Ativo',
                'cnpj'=>'70.185.188/1001-41',
                'ddd'=>'32',
                'telefone'=>'99597-8558'
            ],
        ];
        return view('app.fornecedor.index',compact('fornecedores'));
    }
}
