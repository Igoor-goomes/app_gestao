<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    
    protected $fillable = ['no_produto', 'ds_produto', 'vl_mercado', 'qt_produto'];
}
