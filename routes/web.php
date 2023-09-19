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

$router->get('/', 'WebsiteController@index');

$router->get('categories', 'CategoryController@index');
$router->get('categories/{id:\d+}', 'CategoryController@show');
$router->get('categories-tree', 'CategoryController@displayCategoryTree');


$router->get('products', 'ProductController@index');
$router->get('products/{id:\d+}', 'ProductController@show');


