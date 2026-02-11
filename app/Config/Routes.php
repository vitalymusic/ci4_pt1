<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/users', 'Home::users');
$routes->get('/users/id/(:num)', 'Home::user/$1');



$routes->get('/posts', 'Home::posts');



