<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Pages::about');
$routes->get('services', 'Pages::services');
$routes->match(['get','post'],'contact', 'Pages::contact');
$routes->get('portfolio', 'Portfolio::index');
$routes->get('portfolio/(:segment)', 'Portfolio::view/$1');
$routes->get('videos', 'Gallery::index');


