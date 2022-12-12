<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index ()
    {
        return view('app.fornecedor.index');
    }

    public function show ()
    {
        return view('app.fornecedor.show');
    }

    public function create ()
    {
        return view('app.fornecedor.create');
    }

}
