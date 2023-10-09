<?php

use App\Controllers\Home;
use App\Controllers\UserController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->get('/profile/(:any)/(:any)/(:any)', [Home::class,'profile']);

// $routes->get('/user/profile/(:any)/(:any)/(:any)', [HomeController::class,'profile']);
$routes->get('/user/profile', [UserController::class,'profile']);
$routes->get('/user/create', [UserController::class,'create']);
$routes->post('/user/store', [UserController::class,'store']);
$routes->get('/user', [UserController::class,'index']);
$routes->get('user/(:any)', [UserController::class, 'show']);