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
Route::name('writings.')
    ->namespace('writings')
    ->prefix('writings')
    ->group(function () {

        Route::name('articles.')
            ->prefix('articles')
            ->group(function () {
                Route::get('/', 'ArticleController@index')->name('index');
                Route::get('/create', 'ArticleController@create')->name('create');
                Route::post('/', 'ArticleController@store')->name('store');
                Route::get('/{articleId}/edit', 'ArticleController@edit')->name('edit');
                Route::put('/{articleId}', 'ArticleController@update')->name('update');
            });
    });
