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
            $table->string('fabricante', 30);
            $table->string('modelo', 50);
            $table->string('numero_serie', 10);
            $table->timestamps();


            //contraint
            $table->foreign('produto_id')->references('id')->on('produtos');
            //A coluna 'produto_id' da tabela'produto_detalhes' faz referencia a coluna 'id' da tabela 'produtos'
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

        // Schema::table('produto_detalhes', function (Blueprint $table) {
        //     $table->dropForeign('produto_detalhes_produto_id_foreign');
        //     $table->drop(['fabricante','modelo','numero_serie']);
        // });
    }
}
