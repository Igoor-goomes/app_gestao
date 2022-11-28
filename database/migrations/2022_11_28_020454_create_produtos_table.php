<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 70);
            $table->text('descricao', 200)->nullable(); //aceita valor null
            $table->integer('peso')->nullable();
            $table->float('preco_venda',8,2)->default(0.01); //passando valor padrão
            $table->integer('estoque_minimo')->default(1); 
            $table->integer('estoque_maximo')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}

//nome - string
//descrição - text
//peso - integer
//preco_venda - float
//estoque_minimo - integer
//estoque_maximo - integer
