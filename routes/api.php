<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function () {

    /** Não costumo criar assim, mas crio um MIDDLEWARE para o CORS
     * Para o teste, não fiz para manter o escopo simples conforme solicitado.
    */
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: *');
    header('Access-Control-Allow-Headers: *');

    Route::get('veiculos/{id?}', 'VeiculosController@get');
    Route::post('veiculos/', 'VeiculosController@create');
    Route::put('veiculos/{id}', 'VeiculosController@update');
    Route::delete('veiculos/{id}', 'VeiculosController@delete');
});
