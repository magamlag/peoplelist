<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use GuzzleHttp\Client;
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

$router->get('/people', function () use ($router) {
    $client = new Client();
    $request = $client->request('GET', 'https://swapi.dev/api/people/');
    return view('peoplelist',['data'=>$request]);
});
