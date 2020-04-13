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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/test/session-put', function (\Illuminate\Http\Request $request) {
    $request->session()->put('name', config('app.name'));
    return response()->json([
        'session.name' => $request->session()->get('name')
    ]);
});

$router->get('/test/session-get', function (\Illuminate\Http\Request $request) {
    return response()->json([
        'session.name' => $request->session()->get('name'),
    ]);
});
