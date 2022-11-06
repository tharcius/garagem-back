<?php
/** @var \Laravel\Lumen\Routing\Router $router */
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

$router->group(['prefix' => 'users'], function () use ($router) {
    $router->get('/', 'User\\IndexController@execute');
    $router->post('/', 'User\\CreateController@execute');
    $router->get('/{id}', 'User\\ShowController@execute');
    $router->patch('/{id}', 'User\\UpdateController@execute');
    $router->delete('/{id}', 'User\\DestroyController@execute');
});

$router->group(['prefix' => 'cars'], function () use ($router) {
    $router->get('/', 'Car\\IndexController@execute');
    $router->post('/', 'Car\\CreateController@execute');
    $router->get('/{id}', 'Car\\ShowController@execute');
    $router->patch('/{id}', 'Car\\UpdateController@execute');
    $router->delete('/{id}', 'Car\\DestroyController@execute');
    $router->post('/bind', 'Car\\BindController@execute');
    $router->post('/unbind/{id}', 'Car\\UnbindController@execute');
});
