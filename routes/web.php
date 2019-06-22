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

Route::get('home', 'HomeController@index')->name('home');

Route::get('servico', 'ServicoController@index')->name('servico');
Route::get('servico/novo', 'ServicoController@novo')->name('novo');
Route::get('servico/{servico}/editar', 'ServicoController@editar')->name('editar');
Route::get('servico/{servico}/excluir', 'ServicoController@excluir')->name('excluir');
Route::post('servico/salvar', 'ServicoController@salvar')->name('salvar');
Route::patch('servico/{servico}', 'ServicoController@atualizar')->name('atualizar');


