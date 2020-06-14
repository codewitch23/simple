<?php

use Illuminate\Support\Facades\Route;
use App\Article;
Route::get('/', function () {
    $articles=Article::take(3)->latest()->get();
    return view('welcome',compact('articles'));
});
Route::get('/articles','ArticleController@index');
Route::get('/articles/create','ArticleController@create')->name('articles.create');
Route::post('/articles','ArticleController@store');
Route::get('/articles/{article}/edit','ArticleController@edit');
Route::get('/articles/{article}','ArticleController@show')->name('articles.show');
Route::put('/articles/{article}','ArticleController@update');


