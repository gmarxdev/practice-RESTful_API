<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('api', function($routes) {
    $routes->get('users', 'Api\Users::index');
    $routes->get('users/(:num)', 'Api\Users::show/$1');
    $routes->post('users', 'Api\Users::create');
    $routes->put('users/(:num)', 'Api\Users::update/$1');
    $routes->delete('users/(:num)', 'Api\Users::delete/$1');
});