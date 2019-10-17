<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/visualizar/contato', [
    'uses' => 'ContatoController@visualizarContato',
    'as' => 'visualizar.contato'
]);

Route::get('/adicionar/contato', [
    'uses' => 'ContatoController@adicionarContato',
    'as' => 'adicionar.contato'
]);

Route::post('/salvar/contato', [
    'uses' => 'ContatoController@salvarContato',
    'as' => 'salvar.contato'
]);

Route::get('/editar/contato/{id}', [
    'uses' => 'ContatoController@editarContato',
    'as' => 'editar.contato'
]);

Route::post('/atualizar/contato/{id}', [
    'uses' => 'ContatoController@atualizarContato',
    'as' => 'atualizar.contato'
]);

Route::get('/detalhar/contato/{id}', [
    'uses' => 'ContatoController@detalharContato',
    'as' => 'detalhar.contato'
]);

Route::get('/deletar/contato/{id}', [
    'uses' => 'ContatoController@deletarContato',
    'as' => 'deletar.contato'
]);

Route::get('/procurar/contato', [
    'uses' => 'ContatoController@procurarContato',
    'as' => 'procurar.contato'
]);