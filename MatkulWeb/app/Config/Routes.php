<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Users::index');
$routes->get('/product/index', 'Product::index');
$routes->get('/product/create', 'Product::create');
$routes->post('/product/save', 'Product::save');
$routes->get('/product/delete/(:num)', 'Product::delete/$1');
$routes->get('/product/edit/(:num)', 'Product::edit/$1');
$routes->post('/product/update', 'Product::update');

$routes->get('/BrowseProduk/index', 'BrowseProduk::index');
$routes->get('/BrowseProduk/create', 'BrowseProduk::create');
$routes->post('/BrowseProduk/save', 'BrowseProduk::save');
$routes->get('/BrowseProduk/delete/(:num)', 'BrowseProduk::delete/$1');
$routes->get('/BrowseProduk/edit/(:num)', 'BrowseProduk::edit/$1');
$routes->post('/BrowseProduk/update', 'BrowseProduk::update');

$routes->get('/user/index', 'Users::index');
$routes->post('/user/login', 'Users::login');
$routes->get('/user/logout', 'Users::logout');
$routes->get('/user/register', 'Users::register');
$routes->post('/user/save', 'Users::save');
$routes->get('/about', 'Page::about');

$routes->get('/admin/index', 'AdminController::index');
$routes->get('/admin/about', 'AdminController::about');
$routes->get('/admin/contact', 'AdminController::contact');
/*
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
