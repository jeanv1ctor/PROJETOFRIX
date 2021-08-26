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

Route::get('/home', 'HomeController@index')->name('home');

/*rota para cadastrar caminhao*/ 
Route::get('/caminhao/novo', 'CaminhaoController@create')->name('cadastra_caminhao');

/*rota para enviar o preenchimento do fomulario*/
Route::post('/caminhao/novo', 'CaminhaoController@store')->name('salva_caimnhao');

