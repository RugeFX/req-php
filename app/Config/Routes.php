<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => 'guest']);
$routes->get('users', 'UserController::getUsers');
$routes->match(['get', 'post'], '/signup', 'AuthController::signup', ['filter' => 'guest']);
$routes->match(['get', 'post'], '/signin', 'AuthController::signin', ['filter' => 'guest']);
$routes->get("logout", 'AuthController::logout', ['filter' => 'authGuard']);
$routes->get("testpw", "AuthController::testPw");
$routes->get("dashboard", "Home::dashboard", ['filter' => 'authGuard']);
$routes->get("daftar-seminar", "SeminarController::daftar_seminar", ['filter' => 'authGuard']);
$routes->get("info-seminar/(:segment)", "SeminarController::info_seminar/$1", ['filter' => 'authGuard']);
$routes->get("riwayat-seminar", "SeminarController::riwayat_seminar", ['filter' => 'authGuard']);
$routes->post("participate-seminar", "SeminarController::participate_seminar", ['filter' => 'authGuard']);

