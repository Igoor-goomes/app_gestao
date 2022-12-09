<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableSiteContatosAddFkMotivoContato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Adicionar a coluna motivo_contatos_id
        Schema::table('site_contatos', function(Blueprint $table){
            $table->unsignedBigInteger('motivo_contatos_id');
        });

        //Query - Atribuir motivo_contato para nova coluna motivo_contatos_id
        DB::statement('update site_contatos set motivo_contatos_id = motivo_contato');

        //Criar o fk
        Schema::table('site_contatos', function(Blueprint $table){
            $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
            //removendo a coluna motivo_contato
            $table->dropColumn('motivo_contato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Agora vamos desfazer os passos acima de traz para frente*/

        //Criar a coluna motivo_contato
        Schema::table('site_contatos', function(Blueprint $table) {
            $table->integer('motivo_contato');
            //remover a fk
            $table->dropForeign('site_contatos_motivo_contatos_id_foreign');
        });

        //Query - atribuir motivo_contatos_id para coluna motivo_contato
        DB::statement('update site_contatos set motivo_contato = motivo_contatos_id');

        //remover a coluna motivo_contatos_id
        Schema::table('site_contatos', function(Blueprint $table) {
            $table->dropColumn('motivo_contatos_id');
        });
    }
}
