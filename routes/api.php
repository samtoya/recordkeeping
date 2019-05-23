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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('cars', 'Api\CarsController@index')->name('cars.index');
Route::get('cars/{car}', 'Api\CarsController@show')->name('cars.show');
Route::get('customers', 'Api\CustomersController@index')->name('customers.index');
Route::get('customers/{customer}', 'Api\CustomersController@show')->name('customers.show');
Route::get('search/{query}', 'Api\SearchController@index');
