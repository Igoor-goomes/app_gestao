<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //Ajustando o nome da tabela no Model para um correto ORM
    protected $table ='fornecedores';
    //dterminando os atributos
    protected $fillable = ['nome','site','uf','email'];
}
