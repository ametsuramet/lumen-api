<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return 'Hello World';
});

$app->get('post',  [
    'as' => 'post', 'uses' => 'postController@index' ,'middleware' => 'cross'
]);
$app->get('post/{id}',  [
    'as' => 'post', 'uses' => 'postController@show' ,'middleware' => 'cross'
]);
$app->post('login',  [
    'as' => 'login', 'uses' => 'loginController@index' ,'middleware' => 'cross'
]);
