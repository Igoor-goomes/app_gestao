<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoDetalhesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_detalhes', function (Blueprint $table) {
            //colunas
            $table->id();
            $table->unsignedBigInteger('produto_id');
            $table->string('no_marca', 30);
            $table->string('ds_modelo', 50);
            $table->string('nr_serie', 10)->unique();
            $table->date('dt_entrada');
            $table->date('dt_saida')->nullable();
            $table->timestamps();


            //contraint
            $table->foreign('produto_id')->references('id')->on('produtos');  //A coluna 'produto_id' da tabela 'produto_detalhes' faz referencia a coluna 'id' da tabela 'produtos'

            $table->unique('produto_id'); //garante o relacionamento de um para um
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_detalhes');
         //rmovendo colunas antigas
    }
}
