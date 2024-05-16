<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/product/', 'Home::searchByProductName');
$routes->get('/cat/0', 'Home::index');
$routes->get('/cat/(:num)', 'Home::searchByCategoryId/$1');
