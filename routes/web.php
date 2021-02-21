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
    return view('welcome');
});

Route::get('login',[
    'uses' => 'LoginController@login',
    'as'   => 'login'
]);

Route::post('cek-login',[
    'uses' => 'LoginController@cekLogin',
    'as'   => 'cek.login' 
]);

Route::get('cars',[
    'uses'  => 'CarsController@index',
    'as'    => 'cars.index'
]);

Route::get('cars/create',[
    'uses'  => 'CarsController@create',
    'as'    => 'cars.create'
]);
Route::post('cars/store',[
    'uses'  => 'CarsController@store',
    'as'    => 'cars.store'
]);

Route::get('cars/{cars}/edit',[
    'uses'  => 'CarsController@edit',
    'as'    => 'cars.edit'
]);

Route::post('cars/{cars}/update',[
    'uses'  => 'CarsController@update',
    'as'    => 'cars.update'
]);

Route::get('cars/{cars}/destroy',[
    'uses'  => 'CarsController@delete',
    'as'    => 'cars.destroy'
]);

Route::get('sales',[
    'uses'  => 'SalesController@index',
    'as'    => 'sales.index'
]);

