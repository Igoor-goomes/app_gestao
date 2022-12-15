<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setores', function (Blueprint $table) {
            $table->id();
            $table->string('departamento', 30);
            $table->timestamps();
        });

        //adicionar o relacionamento com a tabela produtos
        Schema::table('produtos', function(Blueprint $table) {
            $table->unsignedBigInteger('setor_id');
            $table->foreign('setor_id')->references('id')->on('setores');
        });

        //adicionar o relacionamento com a tabela produto_detalhes
        Schema::table('produto_detalhes', function(Blueprint $table) {
            $table->unsignedBigInteger('setor_id');
            $table->foreign('setor_id')->references('id')->on('setores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //remover o relacionamento com a tabela produto_detalhes
        Schema::table('produto_detalhes', function(Blueprint $table) {
            //remover a fk
            $table->dropForeign('produto_detalhes_setor_id_foreign'); //[table]_[coluna]_foreign
            //remover a coluna unidade_id
            $table->dropColumn('setor_id');
        });

        //remover o relacionamento com a tabela produtos
        Schema::table('produtos', function(Blueprint $table) {
            //remover a fk
            $table->dropForeign('produtos_setor_id_foreign'); //[table]_[coluna]_foreign
            //remover a coluna unidade_id
            $table->dropColumn('setor_id');
        });

        Schema::dropIfExists('setores');
    }
}
