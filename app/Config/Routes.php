<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// TODO: Home Routes
$routes->get('/', 'Home::index');

// TODO: User Routes
$routes->group('user', function ($routes) {
    $routes->get('contoh', 'Home::contoh');
});

// TODO: Admin Routes
$routes->group('admin', function ($routes) {
    $routes->get('dashboard', 'AdminController::index');
});

// TODO: CRUD Routes
// --   Untuk Keamanan Data, Routes CRUD Harus Menggunakan Metode Pengambilan Data "post". Contoh Dibawah Ini

// -- User
$routes->group('user', function ($routes) {
    $routes->post('insert', 'Crud\UserController::insert');
    $routes->post('update', 'Crud\UserController::update');
    $routes->post('delete', 'Crud\UserController::delete');
});

// -- Pemateri
$routes->group('pemateri', function ($routes) {
    $routes->post('insert', 'Crud\PemateriController::insert');
    $routes->post('update', 'Crud\PemateriController::update');
    $routes->post('delete', 'Crud\PemateriController::delete');
});

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
