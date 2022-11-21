<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $parametro1,$parametro2)
    {
        echo "A soma de $parametro1 + $parametro2 é:".($parametro1+$parametro2);
    }
}
