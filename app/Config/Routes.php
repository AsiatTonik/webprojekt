<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
require 'router.php';

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/login', 'AuthController@login');
$router->post('/login', 'AuthController@authenticate');
$router->get('/dashboard', 'DashboardController@index')->middleware('auth');
$router->get('/items', 'ItemController@index');
$router->get('/items/{id}', 'ItemController@show');
$router->post('/items', 'ItemController@store')->middleware('auth');
$router->put('/items/{id}', 'ItemController@update')->middleware('auth');
$router->delete('/items/{id}', 'ItemController@destroy')->middleware('auth');
$router->get('/pdf', 'PdfController@generate');
$router->get('/excel', 'ExcelController@generate');

$router->resolve();
