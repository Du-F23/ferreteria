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
