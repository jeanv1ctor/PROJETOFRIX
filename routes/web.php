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

/**rota para redirecionar para a home */
Route::get('/', function () {
    return view('auth.login');
})->name('login');


Auth::routes();


Route::group(['middleware'=>'auth'],function(){



    Route::get('logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

    /*rota para cadastrar veiculo*/ 
    Route::get('/veiculo/novo', 'veiculoController@create')->name('cadastra_veiculo');

    /*rota para enviar o  fomulario preenchido do cadastro*/
    Route::post('/veiculo/novo', 'veiculoController@store')->name('salvar_veiculo');

    /*rota para listar os veículos*/ 
    Route::get('/veiculo/lista', 'veiculoController@show')->name('lista_veiculo');


    /*rota para a pagina de editar veículo*/

    Route::get('/veiculo/editar/{id}', 'veiculoController@edit')->name('editar_veiculo');

    /*rota para salvar a edição do veículo*/

    Route::post('/veiculo/editar/{id}', 'veiculoController@update')->name('atualiza_veiculo');

    /*rota para excluir veículo*/
    Route::get('/veiculo/excluir/{id}', 'veiculoController@destroy')->name('exclui_veiculo');


    /*rota para a pagina de registrar abastecimento*/

    Route::get('/abastecimento/registrar', 'AbastecimentoController@create')->name('abastece');


    /*rota para enviar o formulario preenchido do abastecimento*/ 
    Route::post('/abastecimento/registrar', 'AbastecimentoController@store')->name('salvar_abastecimento');


    /*rota para  listar abastecimento*/

    Route::get('/abastecimento/historico', 'AbastecimentoController@show')->name('lista_abastecimento');

});