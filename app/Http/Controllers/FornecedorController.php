<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores =[
            0 => ['nome'=>'IGEPLAC', 'status'=>'Inativo'],
            1 => ['nome'=>'UNIASSELVI', 'status'=>'Inativo'],
            2 => ['nome'=>'UNIMAUA', 'status'=>'Inativo']
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
