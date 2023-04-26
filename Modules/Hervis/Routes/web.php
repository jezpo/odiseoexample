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

/*Route::prefix('hervis')->group(function() {
    Route::get('/', 'HervisController@index');
});
*/



Route::prefix('hervis')->group(function() {
    Route::get('/', 'HervisController@index');
    Route::get('/panel', 'HervisController@panel')->name('hervis.panel');
});