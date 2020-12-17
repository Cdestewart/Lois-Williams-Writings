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


// works
Route::name('articles.')
    ->prefix('articles')
    ->namespace('App\Http\Controllers\Articles')
    ->group(function () {
        Route::get('/', 'ArticlesController@index')->name('index');
        Route::get('/create', 'ArticlesController@create')->name('create');
        Route::post('/', 'ArticlesController@store')->name('store');
        Route::get('/{articleId}/edit', 'ArticlesController@edit')->name('edit');
        Route::put('/{articleId}', 'ArticlesController@update')->name('update');
    });
