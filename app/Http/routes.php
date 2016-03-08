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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'panel', 'namespace' => 'Panel', 'middleware' => 'auth'], function()
{
    Route::get('/', 'IndexController@index');
    /*Route::resource('pages', 'PagesController');
    Route::resource('comments', 'CommentsController');
    Route::resource('comments.id', 'CommentsController');
    Route::resource('article_comments','ArticleCommentsController');
    Route::resource('article','ArticleController');
    Route::get('comments/edit/{type}/{id}','CommentsController@editComments');*/
});

Route::post('testauth','testAuth@auth');
