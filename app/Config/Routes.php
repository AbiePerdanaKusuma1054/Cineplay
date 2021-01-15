<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index', ['filter' => 'noauth']);
$routes->get('/auth/login', 'Auth::login', ['filter' => 'noauth']);
$routes->get('/dashboard', 'User::dashboard', ['filter' => 'auth']);
$routes->get('/auth/register', 'Auth::register');
$routes->get('/auth/logout', 'Auth::logout');
$routes->get('/admin/dashboard', 'Admin::index', ['filter' => 'auth']);
$routes->get('/admin/movie', 'Admin::movie', ['filter' => 'auth']);
$routes->get('/movie/(:any)', 'User::detail/$1',);
$routes->get('/movie/pesan/(:any)', 'User::pesan/$1',);
$routes->delete('/admin/(:num)', 'Admin::delete/$1',);
$routes->get('/admin/create', 'Admin::create', ['filter' => 'auth']);
$routes->get('/admin/edit/(:segment)', 'Admin::edit/$1');
$routes->get('/ticket', 'User::tiket', ['filter' => 'auth']);
$routes->get('/book', 'User::book', ['filter' => 'auth']);

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
