<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspecificacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especificacoes', function (Blueprint $table) {
            $table->id();
            $table->string('lote', 10);
            $table->date('data_fab');
            $table->timestamps();
        });

        //relacionamento com a tabela produtos
        Schema::table('produtos',function(Blueprint $table) {
            $table->unsignedBigInteger('especificacoes_id');
            $table->foreign('especificacoes_id')->references('id')->on('especificacoes');
        });
        //relacionamento com a tabela produto_detalhes
        Schema::table('produto_detalhes',function(Blueprint $table) {
            $table->unsignedBigInteger('especificacoes_id');
            $table->foreign('especificacoes_id')->references('id')->on('especificacoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //remove relacionamento com produto_detalhes
        Schema::table('produto_detalhes',function(Blueprint $table) {
            //fk
            $table->dropForeign('produto_detalhes_especificacoes_id_foreign');
            //coluna
            $table->dropColumn('especificacoes_id');
        });

        //remove relacionamento com produtos
        Schema::table('produtos',function(Blueprint $table) {
            //fk
            $table->dropForeign('produtos_especificacoes_id_foreign');
            //coluna
            $table->dropColumn('especificacoes_id');
        });

        Schema::dropIfExists('especificacoes');
    }
}
