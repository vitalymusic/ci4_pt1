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
$routes->get('/logout', 'Admin::logout');
$routes->get('/admin/editpages/(:num)', 'Admin::loadPageById/$1');
$routes->get('/admin/deletepage/(:num)', 'Admin::deletePageById/$1');
$routes->post('/admin/updatePage', 'Admin::updatePage');
$routes->post('/admin/createPage', 'Admin::createPage');




$routes->post('/login/check','Admin::loginProcess');




// Bilžu galerija
$routes->get('/gallery', 'Gallery::index');
$routes->get('/gallery/form', 'Gallery::uploadForm');
$routes->post('/gallery/uploadphoto', 'Gallery::uploadPhoto');









