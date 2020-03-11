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
$router->get('/user', function () use ($router) {
    return 'get user';
});

$router->post('/user', function () use ($router) {
    return 'post user';
});

$router->put('/user', function () use ($router) {
    return 'put user';
});

$router->delete('/user', function () use ($router) {
    return 'delete user';
});

$router->patch('/user', function () use ($router) {
    return 'patch user';
});

$router->options('/user', function () use ($router) {
    return 'options user';
});