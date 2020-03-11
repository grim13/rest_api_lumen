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
$router->get('/user', function () {
    return 'get user';
});

$router->post('/user', function () {
    return 'post user';
});

$router->put('/user', function ()  {
    return 'put user';
});

$router->delete('/user', function () {
    return 'delete user';
});

$router->patch('/user', function () {
    return 'patch user';
});

$router->options('/user', function () use ($router) {
    return 'options user';
});

//contoh route parameter required
$router->get('/user/{id}/{name}/{nim}', function ($id,$a,$b) {
    $c = $a+$b;
    return 'get user dengan id '.$id.' hasil tambah '.$c;
});

//contoh optional parameter

$router->get('/mahasiswa/{nim}[/{name}]', function ($nim, $name = 'saya') {
    return 'nim : '.$nim.' name: '.$name;
});