<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoDetalhe extends Model
{
    //
    protected $fillable = ['produto_id', 'no_marca', 'ds_modelo', 'nr_serie', 'dt_entrada', 'dt_saida'];
    
}
