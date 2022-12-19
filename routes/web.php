<?php

use Illuminate\Support\Facades\Route;

// Rotas via crontroller

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::post('/novo', 'PrincipalController@novoUsuario')->name('site.registro');
Route::get('/sobre', 'SobreNosController@sobreNos')->name('site.sobre');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@salvar')->name('site.contato');
Route::get('/login/{erro?}', 'LoginController@index')->name('site.login');
Route::post('/login', 'LoginController@login')->name('site.login');


// Formulário de Registro

// Route::get('/registro', 'NovoUsuarioController@create')->name('site.index.create');
// Route::post('/registro', 'NovoUsuarioController@store')->name('site.index.store');




//Grupo de rotas - app

Route::group(['middleware' => ['auth']], function (){
    Route::group(['prefix' => '/app'], function (){      

        // Painel APP
        
        Route::get('/painel', 'ProdutoController@index')->name('app.produto.index');
        Route::get('/produto/show/{id}', 'ProdutoController@show')->name('app.produto.show');
        Route::get('/produto/novo', 'ProdutoController@create')->name('app.produto.create');
        Route::post('/produto/novo', 'ProdutoController@store')->name('app.produto.store');
        Route::get('/produto/edit/{id}', 'ProdutoController@edit')->name('app.produto.edit');
        Route::post('/produto/edit/{id}', 'ProdutoController@update')->name('app.produto.update');
        Route::get('/produto/excluir/{id}', 'ProdutoController@destroy')->name('app.produto.destroy');


        // Logout do App Gestão de Estoque

        Route::get('/sair', 'LoginController@sair')->name('app.sair');
    });
});

//Rotas de contigência (fallback) | Not Found 404

Route::fallback(function () {
    echo 'URL acessada não existe, <a href="'.route('site.index').'">clique aqui</a> para ir para página principal'; 
});
