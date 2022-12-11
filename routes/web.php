<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rotas via crontroller

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre', 'SobreNosController@sobreNos')->name('site.sobre');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@salvar')->name('site.contato');
Route::get('/login/{erro?}', 'LoginController@index')->name('site.login');
Route::post('/login', 'LoginController@autenticar')->name('site.login');

//middleware('autenticacao:usuario')->prefix...
//Grupo de rotas - app
Route::prefix('/app')->group(function(){
    Route::get('/home', 'HomeController@index')->name('app.home');
    Route::get('/sair', 'LoginController@sair')->name('app.sair');
    Route::get('/dashboard', 'DashboardController@index')->name('app.dashboard');
    Route::get('/fornecedor', 'FornecedorController@index')->name('app.fornecedor');
    Route::get('/produto', 'ProdutoController@index')->name('app.produto');
});

//Rotas de contigência (fallback)

Route::fallback(function () {
    echo 'URL acessada não existe, <a href="'.route('site.index').'">clique aqui</a> para ir para página principal'; 
});



// Exemplos para testes

Route::get('/teste/{parametro1}/{parametro2}','TesteController@teste')->name('teste');
