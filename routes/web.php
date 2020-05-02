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

//   GET/articles
//   GET/articles/:id
//   POST/articles
//   PUT/articles/:id
//   DELETE/articles/:id

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {

    // $article = App\Article::all();
    // $article = App\Article::latest()->get();

    // return $article;
    return view('about',[
        'articles' => App\Article::take(3)->latest()->get()

    ]);
});
Route::get('/articles', 'ArticlesController@index');

Route::post('/articles', 'ArticlesController@store');

Route::get('/articles/create', 'ArticlesController@create');

Route::get('/articles/{article}', 'ArticlesController@show');

Route::get('/articles/{article}/edit', 'ArticlesController@edit');

Route::put('/articles/{article}', 'ArticlesController@update');

