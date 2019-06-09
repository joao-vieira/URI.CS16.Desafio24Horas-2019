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
})->name('/');

Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index'] );

Route::group(['prefix' => 'indicadores'], function() {
    Route::get('qualidade', ['as' => 'indicadores.qualidade', 'uses' => 'IndicadoresController@indexQualidade'] );
    Route::get('performance', ['as' => 'indicadores.performance', 'uses' => 'IndicadoresController@indexPerformance'] );
    Route::get('disponibilidade', ['as' => 'indicadores.disponibilidade', 'uses' => 'IndicadoresController@indexDisponibilidade'] );
});

Route::get('dicionario', ['as' => 'dicionario', 'uses' => 'DicionarioController@index'] );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
