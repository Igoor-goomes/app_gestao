<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $parametro1,$parametro2)
    {
        // echo "A soma de $parametro1 + $parametro2 é:".($parametro1+$parametro2);
        // Passando uma arry associativa
        // return view('site.teste', ['parametro1' => $parametro1, 'parametro2' => $parametro2]);
        // Passando pelo método compact ()
        // return view('site.teste', compact('parametro1', 'parametro2'));
        // Passando pelo método With
        return view('site.teste')->with('parametro1', $parametro1)->with('parametro2', $parametro2);
    }
}
