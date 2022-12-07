<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    //Método SoftDelete
    use SoftDeletes;
        
    //Ajustando o nome da tabela no Model para um correto ORM
    protected $table ='fornecedores';
    //dterminando os atributos para passar via create
    protected $fillable = ['nome','site','uf','email'];
}
