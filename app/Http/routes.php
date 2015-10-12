<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ArticleController@index');

Route::get('/test', function(){

    event(new App\Events\UpdateArticles());
    return "hello world!";
});

Route::group(['prefix' => 'admin'], function(){

    Route::resource('articles', 'ArticleController');
});
