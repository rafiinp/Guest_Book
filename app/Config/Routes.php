<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'GuestBook::index');
$routes->post('submit', 'GuestBook::submit');
$routes->get('admin', 'Admin::index');
$routes->get('admin/delete/(:num)', 'Admin::delete/$1');