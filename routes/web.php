<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

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
    return view('app');
});

$router->get('/view/api', [ // this shit
    'as' => 'leckmichdrecksscheißehier', 
    'uses' => 'NoteApi@get'
]);

$router->post('/view/api', [ // this shit
    'as' => 'post', 
    'uses' => 'NoteApi@save'
]);

$router->get('/version', function () use ($router) {
    return $router->app->version();
});