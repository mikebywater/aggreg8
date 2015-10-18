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



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){



    Route::get('/', 'AdminController@index');

    Route::resource('articles', 'ArticleController');

    Route::resource('sources', 'SourceController');

    Route::get('refresh', function(){

        ini_set('max_execution_time', 300);
        event(new App\Events\UpdateArticles());
        return "... articles updated :)";
    });
});

Route::controllers([

   'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'

]);
