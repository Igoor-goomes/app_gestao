<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*
        $contato = new SiteContato();
        $contato -> nome = 'Site em Teste';
        $contato -> telefone = '(61) 9 9617-7070';
        $contato -> email = 'siteTeste@gmail.com';
        $contato -> motivo_contato = 1;
        $contato -> mensagem = 'Seja bem vindo ao sistema!';
        $contato -> save();
        */

        factory(SiteContato::class,100)->create();
    }
}
