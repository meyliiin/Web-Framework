<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// login 
$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/logout', 'Login::logout');

//  admin
$routes->get('admin', 'Judol::index');
$routes->get('admin/detail/(:any)', 'Judol::detail/$1');
$routes->get('admin/create', 'Judol::create');
$routes->post('admin/save', 'Judol::save');
$routes->delete('admin/delete/(:num)', 'Judol::delete/$1');
$routes->get('admin/edit/(:any)', 'Judol::edit/$1');
$routes->post('admin/update/(:num)', 'Judol::update/$1');

//  website 
$routes->get('/', 'Home::index');
// $routes->get('judol', 'Home::judol');
$routes->get('katalog', 'Home::katalog');
$routes->get('judol/(:any)', 'Home::judol/$1');
