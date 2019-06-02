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
Route::get('/prices/add','PricesController@add');
Route::post('/prices/save','PricesController@save');
Route::get('/prices/edit/{id}','PricesController@edit');
Route::post('/prices/update','PricesController@update');
Route::get('/prices/delete/{id}','PricesController@delete');

Route::get('/types','TypesController@index');
Route::get('/types/add','TypesController@add');
Route::post('/types/save','TypesController@save');
Route::get('/types/edit/{id}','TypesController@edit');
Route::post('/types/update','TypesController@update');
Route::get('/types/delete/{id}','TypesController@delete');

Route::get('/markets','MarketsController@index');
Route::get('/markets/add','MarketsController@add');
Route::post('/markets/save','MarketsController@save');
Route::get('/markets/edit/{id}','MarketsController@edit');
Route::post('/markets/update','MarketsController@update');
Route::get('/markets/delete/{id}','MarketsController@delete');

Route::get('/traders','TradersController@index');
Route::get('/traders/add','TradersController@add');
Route::post('/traders/save','TradersController@save');
Route::get('/traders/edit/{id}','TradersController@edit');
Route::post('/traders/update','TradersController@update');
Route::get('/traders/delete/{id}','TradersController@delete');

Route::get('/units','UnitsController@index');
Route::get('/units/add','UnitsController@add');
Route::post('/units/save','UnitsController@save');
Route::get('/units/edit/{id}','UnitsController@edit');
Route::post('/units/update','UnitsController@update');
Route::get('/units/delete/{id}','UnitsController@delete');
