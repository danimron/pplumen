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

$router->post('/pengguna', 'PenggunaController@create');
$router->get('/pengguna', 'PenggunaController@index');
$router->get('/pengguna/{id}', 'PenggunaController@show');
$router->put('/pengguna/{id}', 'PenggunaController@update');
$router->delete('/pengguna/{id}', 'PenggunaController@destroy');

$router->post('/register', 'UserController@register');
$router->post('/login', 'UserController@login');

$router->get('/calon', 'CalonController@index');
$router->get('/calon/{id}', 'CalonController@show');

$router->put('/vote/{id}', 'CalonController@vote');
$router->put('/udahvote/{id}', 'UserController@vote');