<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// Lapas front
$routes->get('/', 'Home::index');
$routes->get('/users', 'Home::users');
$routes->get('/users/id/(:num)', 'Home::user/$1');
$routes->get('/posts', 'Home::posts');



// Lapas Admin daļa
$routes->get('/admin', 'Admin::index');
$routes->get('/login', 'Admin::login');










