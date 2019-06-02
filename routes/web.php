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

Route::get('/commodities','CommoditiesController@index');
Route::get('/commodities/add','CommoditiesController@add');
Route::post('/commodities/save','CommoditiesController@save');
Route::get('/commodities/edit/{id}','CommoditiesController@edit');
Route::post('/commodities/update','CommoditiesController@update');
Route::get('/commodities/delete/{id}','CommoditiesController@delete');

Route::get('/prices','PricesController@index');

Route::get('/types','TypesController@index');

Route::get('/markets','MarketsController@index');

Route::get('/traders','TradersController@index');

Route::get('/units','UnitsController@index');
