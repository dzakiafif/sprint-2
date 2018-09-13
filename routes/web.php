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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/register','UserController@index');

$router->post('/login','UserController@authenticate');

$router->post('/city-baru','DummyController@index');

$router->post('/province-baru','DummyController@province');

$router->get('/list-province','ProvinceController@index');

$router->get('/list-city','CityController@index');


