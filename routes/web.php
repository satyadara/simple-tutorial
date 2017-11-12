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

Route::get('/home', 'ItemController@index')->name('home');
Route::get('/item/{id}', 'ItemController@show')->name('item.show');
Route::get('/item/create/new', 'ItemController@create')->name('item.create');
Route::post('/item/create/new', 'ItemController@store')->name('item.store');
Route::get('/item/{id}/edit', 'ItemController@edit')->name('item.edit');
Route::post('/item/{id}/edit', 'ItemController@update')->name('item.update');
Route::get('/item/{id}/delete', 'ItemController@delete')->name('item.delete');