<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Passando a instrução de registro no banco de dados
        //Instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor -> nome = 'Kabum';
        $fornecedor -> site = 'www.kabum.com.br';
        $fornecedor -> uf = 'SP';
        $fornecedor -> email = 'faleconosco@kabum.com.br';
        $fornecedor -> save();

        //Método create - atenção para o atributo fillable da classe
        Fornecedor::create([
            'nome'  => 'Kalunga',
            'site'  => 'www.kalunga.com.br',
            'uf'    => 'DF',
            'email' => 'suporte@kalunga.com.br'
        ]);

        //insert
        DB::table('fornecedores')->insert([
            'nome'  => 'Mercado Livre',
            'site'  => 'www.mercadolivre.com.br',
            'uf'    => 'SP',
            'email' => 'suporte@mercadolivre.com.br'
        ]);

    }
}
