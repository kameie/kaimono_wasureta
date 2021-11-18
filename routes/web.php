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

Auth::routes();

Route::get('guest','Auth\LoginController@guestLogin')->name('login.guest');
Route::get('/', 'ItemController@index')->name('item.index');
Route::group(['middleware' => 'auth'], function () {
    Route::get('item/create', 'ItemController@create')->name('item.create');
    Route::post('item/create', 'ItemController@store')->name('item.store');
    Route::get('item/{id}/edit', 'ItemController@edit')->name('item.edit');
    Route::post('item/{id}/update', 'ItemController@update')->name('item.update');
    Route::get('item/{id}/delete', 'ItemController@delete')->name('item.delete');
});

