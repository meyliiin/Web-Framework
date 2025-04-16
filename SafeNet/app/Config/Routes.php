<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('judol', 'Home::judol');
$routes->get('Bahaya Judol', 'Home::Bahaya Judol');
