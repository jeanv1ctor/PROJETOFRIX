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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

/*rota para cadastrar veiculo*/ 
Route::get('/caminhao/novo', 'CaminhaoController@create')->name('cadastra_caminhao');

/*rota para enviar o  fomulario preenchido do cadastro*/
Route::post('/caminhao/novo', 'CaminhaoController@store')->name('salvar_caminhao');

/*rota para listar os veículos*/ 
Route::get('/caminhao/lista', 'CaminhaoController@show')->name('lista_caminhao');


/*rota para a pagina de editar veículo*/

Route::get('/caminhao/editar/{id}', 'CaminhaoController@edit')->name('editar_caminhao');

/*rota para salvar a edição do veículo*/

Route::post('/caminhao/editar/{id}', 'CaminhaoController@update')->name('atualiza_caminhao');

/*rota para excluir veículo*/
Route::get('/caminhao/excluir/{id}', 'CaminhaoController@destroy')->name('exclui_caminhao');


/*rota para a pagina de registrar abastecimento*/

Route::get('/abastecimento/registrar', 'AbastecimentoController@create')->name('abastece');


/*rota para enviar o formulario preenchido do abastecimento*/ 
Route::post('/abastecimento/registrar', 'AbastecimentoController@store')->name('salvar_abastecimento');


/*rota para  listar abastecimento*/

Route::get('/abastecimento/historico', 'AbastecimentoController@show')->name('lista_abastecimento');