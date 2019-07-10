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

$router->post('/', 'HomeController@index');
$router->group(['prefix' => 'api'], function() use ($router)
{
    $router->post('/post', 'PostController@save');
    $router->get('/post', 'PostController@posts');
    $router->get('/post/{id:[0-9]+}', 'PostController@post');
});
