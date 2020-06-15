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
    return view('new_welcome');
});

Route::get('/aboutus', function () {
    return view('about_us',[
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});

Route::get('/articles', 'ArticleController@index')->name('article.index');
Route::get('/articles/create','ArticleController@create');
Route::post('/articles','ArticleController@store');
Route::put('/articles/{article}','ArticleController@update');
Route::get('/articles/{article}', 'ArticleController@show')->name('article.show');
Route::get('/articles/{article}/edit', 'ArticleController@edit');

