<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    
    protected $fillable = ['no_produto', 'descricao_produto', 'vr_mercado', 'qt_estoque', 'setor_id'];
}
