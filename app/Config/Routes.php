<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->get('/', 'PublicControllers::index');
$routes->get('/comunicados', 'PublicControllers::comunicados');
$routes->get('/noticias', 'PublicControllers::noticias');
$routes->get('/contactos', 'PublicControllers::contactos');
$routes->get('/login', 'PublicControllers::login');

$routes->get('/private', 'PrivateControllers::index');
$routes->get('/private/dashboard', 'PrivateControllers::index');
$routes->get('/private/payreceipts', 'PrivateControllers::payreceipts');
$routes->get('/private/salir', 'PrivateControllers::salir');
$routes->post('/private/pay', 'PrivateControllers::pay');

$routes->get('/admin', 'AdminControllers::index');
$routes->get('/admin/dashboard', 'AdminControllers::index');
$routes->post('/admin/updateuser', 'AdminControllers::updateuser');
$routes->get('/admin/deleteuser/(:any)', 'AdminControllers::deleteUserURL/$1');
$routes->get('/admin/registeruser', 'AdminControllers::registeruserview');
$routes->post('/admin/registernewuser', 'AdminControllers::registerUser');
$routes->post('/login', 'LoginController::login');

$routes->get('/inicio', 'LoginController::inicio');
$routes->post('/rusuario', 'LoginController::crearUsuario');
$routes->get('/registro', 'LoginController::registro');



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
