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

Route::get('/commodities','CommoditiesController@index')->middleware('user:admin');
Route::get('/commodities/add','CommoditiesController@add')->middleware('user:admin');
Route::post('/commodities/save','CommoditiesController@save')->middleware('user:admin');
Route::get('/commodities/edit/{id}','CommoditiesController@edit')->middleware('user:admin');
Route::post('/commodities/update','CommoditiesController@update')->middleware('user:admin');
Route::get('/commodities/delete/{id}','CommoditiesController@delete')->middleware('user:admin');

Route::get('/prices','PricesController@index')->middleware('user:admin|operator');
Route::get('/prices/add','PricesController@add');
Route::post('/prices/save','PricesController@save');
Route::get('/prices/edit/{id}','PricesController@edit');
Route::post('/prices/update','PricesController@update');
Route::get('/prices/delete/{id}','PricesController@delete');

Route::get('/types','TypesController@index')->middleware('user:admin');
Route::get('/types/add','TypesController@add')->middleware('user:admin');
Route::post('/types/save','TypesController@save')->middleware('user:admin');
Route::get('/types/edit/{id}','TypesController@edit')->middleware('user:admin');
Route::post('/types/update','TypesController@update')->middleware('user:admin');
Route::get('/types/delete/{id}','TypesController@delete')->middleware('user:admin');

Route::get('/markets','MarketsController@index')->middleware('user:admin');
Route::get('/markets/add','MarketsController@add')->middleware('user:admin');
Route::post('/markets/save','MarketsController@save')->middleware('user:admin');
Route::get('/markets/edit/{id}','MarketsController@edit')->middleware('user:admin');
Route::post('/markets/update','MarketsController@update')->middleware('user:admin');
Route::get('/markets/delete/{id}','MarketsController@delete')->middleware('user:admin');

Route::get('/traders','TradersController@index')->middleware('user:admin');
Route::get('/traders/add','TradersController@add')->middleware('user:admin');
Route::post('/traders/save','TradersController@save')->middleware('user:admin');
Route::get('/traders/edit/{id}','TradersController@edit')->middleware('user:admin');
Route::post('/traders/update','TradersController@update')->middleware('user:admin');
Route::get('/traders/delete/{id}','TradersController@delete')->middleware('user:admin');

Route::get('/units','UnitsController@index')->middleware('user:admin');
Route::get('/units/add','UnitsController@add')->middleware('user:admin');
Route::post('/units/save','UnitsController@save')->middleware('user:admin');
Route::get('/units/edit/{id}','UnitsController@edit')->middleware('user:admin');
Route::post('/units/update','UnitsController@update')->middleware('user:admin');
Route::get('/units/delete/{id}','UnitsController@delete')->middleware('user:admin');
