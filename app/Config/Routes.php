<?php

namespace Config;

use App\Controllers\News;

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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */


 //service route start   
 $routes->add('add_service', 'Service::tajtech_service_form1');
 $routes->get('add_service_type', 'Service::tajtech_service_type_form');
 $routes->get('invoice', 'Service::invoice');
 $routes->post('add_service_type', 'Service::save_service_type_data');
 //service route start end
// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/register-form', 'Home::submit_form');
$routes->get('/test', 'Home::test');
//$routes->get('/login', 'Admin::index');
$routes->get('/addpost', 'Admin::addpost');
$routes->get('/addcat', 'Admin::category');
$routes->add('user-login/(:alpha)/(:any)' , 'Admin::login/$1/$2');
//user view routes
$routes->get('/all-users', 'UserController::index');
$routes->get('/add-users', 'FormController::index');
$routes->post('/add-users', 'FormController::index');
$routes->add('/add-file', 'FileCon::addImg');

//login sign up routes
$routes->get('/login' , 'EmailCon::index');
$routes->get('/sign-up' , 'EmailCon::signUp');
$routes->post('/sign-up' , 'EmailCon::signUp');

// $routes->get('/blogs', 'Blog::index');
// $routes->get('/mycons', 'Mycon::index');
// $routes->get('/mycons/test', 'Mycon::test');
// $routes->get('/mycons/reTest', 'Mycon::reTest/rony');

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
