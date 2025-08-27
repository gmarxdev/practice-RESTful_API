<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->group('api', function($routes) {
//     $routes->get('users', 'Api\UserController::index');
//     $routes->get('users/(:num)', 'Api\UserController::show/$1');
//     $routes->post('users', 'Api\UserController::create');
//     $routes->put('users/(:num)', 'Api\UserController::update/$1');
//     $routes->delete('users/(:num)', 'Api\UserController::delete/$1');
// });

$routes->group('api', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('users', 'Api\UserController::index');
});
