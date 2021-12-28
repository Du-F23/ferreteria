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

Route::get('/category', 'CategoryController@index')->name('categories.index');
Route::post('/category','CategoryController@store')->name('category.store');
Route::put('/category/{id}/update','CategoryController@update')->name('category.update');;
Route::get('/category/{id}/edit','CategoryController@edit');
Route::delete('/category/{category}','CategoryController@delete')->name('category.destroy');

Route::get('/productos', 'ProductsController@index')->name('producto.index');
Route::get('/productos/add','ProductsController@create')->name('producto.create');
Route::post('/productos','ProductsController@store')->name('producto.store');
Route::put('/productos/{id}/update','ProductsController@update')->name('producto.update');;
Route::get('/productos/{id}/edit','ProductsController@edit');
Route::delete('/productos/{productos}','ProductsController@delete')->name('producto.destroy');


//Sales routes
Route::get('/ventas', 'SalesController@index')->name('venta.index');
Route::get('/ventas/add','SalesController@create')->name('venta.create');
Route::post('/ventas','SalesController@store')->name('venta.store');
Route::get('/ventas/{id}/edit','SalesController@edit');
Route::put('/ventas/{id}/update','SalesController@update')->name('venta.update');
Route::delete('/ventas/{venta}','SalesController@delete')->name('venta.destroy');


//Clients routes
Route::get('/clientes', 'ClientsController@index')->name('cliente.index');
Route::get('/clientes/add','ClientsController@create')->name('cliente.create');
Route::post('/clientes','ClientsController@store')->name('cliente.store');
Route::get('/clientes/{id}/edit','ClientsController@edit');
Route::put('/clientes/{id}/update','ClientsController@update')->name('cliente.update');
Route::delete('/clientes/{cliente}','ClientsController@delete')->name('cliente.destroy');
