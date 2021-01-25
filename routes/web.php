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
    echo exec('whoami');
    echo "  ";
    return $router->app->version();
});

$router->get('/test[/{param}]', function ($param = null) {
    return "string++" . $param;
});

$router->get('/user', [
    'as' => 'profile', 
    'uses' => 'ViewController@index'
]);

$router->get('/dashboard', [
    'as' => 'dashboard', 
    'uses' => 'ViewController@dashboard'
]);
