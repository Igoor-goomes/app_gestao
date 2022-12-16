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




//Grupo de rotas - app

Route::group(['middleware' => ['auth']], function (){
    Route::group(['prefix' => '/app'], function (){
        Route::get('/home', 'HomeController@index')->name('app.home');
        Route::get('/sair', 'LoginController@sair')->name('app.sair');
        Route::get('/dashboard', 'DashboardController@index')->name('app.dashboard');
        
        // Fornecedor

        Route::get('/fornecedor', 'FornecedorController@index')->name('app.fornecedor');
        Route::post('/fornecedor/show', 'FornecedorController@show')->name('app.fornecedor.show');
        Route::get('/fornecedor/show', 'FornecedorController@show')->name('app.fornecedor.show');
        Route::get('/fornecedor/novo', 'FornecedorController@create')->name('app.fornecedor.create');
        Route::post('/fornecedor/novo', 'FornecedorController@create')->name('app.fornecedor.create');
        Route::get('/fornecedor/editar/{id}/{msg?}', 'FornecedorController@edit')->name('app.fornecedor.edit');
        Route::get('/fornecedor/excluir/{id}', 'FornecedorController@delete')->name('app.fornecedor.delete');

        
        // Produto
        
        Route::get('/produto', 'ProdutoController@index')->name('app.produto.index');
        Route::get('/produto/show', 'ProdutoController@show')->name('app.produto.show');
        Route::get('/produto/novo', 'ProdutoController@create')->name('app.produto.create');
        Route::post('/produto/novo', 'ProdutoController@store')->name('app.produto.store');
        Route::get('/produto/edit/{id}', 'ProdutoController@edit')->name('app.produto.edit');
        Route::post('/produto/edit/{id}', 'ProdutoController@update')->name('app.produto.update');
        Route::get('/produto/excluir/{id}', 'ProdutoController@destroy')->name('app.produto.destroy');
    });
});

// show ->get 
// create->get,store->post
// edit->get, update->post


// Route::middleware('Authenticate')->prefix('/app')->group(function(){
// });


//Rotas de contigência (fallback)

Route::fallback(function () {
    echo 'URL acessada não existe, <a href="'.route('site.index').'">clique aqui</a> para ir para página principal'; 
});


// Exemplos para testes

// Route::get('/teste/{parametro1}/{parametro2}','TesteController@teste')->name('teste');


