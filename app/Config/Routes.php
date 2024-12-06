<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->post('login', 'Login::login_action');
$routes->post('register/save', 'Login::save');
$routes->get('/register', 'Login::register');
$routes->get('/logout', 'Login::logout');

$routes->get('/studio/home', 'Pages::index', ['filter' => 'clientFilter']);
$routes->get('/studio/booking', 'Pages::booking', ['filter' => 'clientFilter']);
$routes->get('/studio/contact', 'Pages::contact', ['filter' => 'clientFilter']);
$routes->post('save', 'Studio::save_booking');
$routes->get('/studio/riwayat', 'Studio::riwayat_client', ['filter' => 'clientFilter']);

$routes->get('/admin/data_akun', 'Admin::index', ['filter' => 'adminFilter']);
$routes->get('/admin/informasi_booking', 'Admin::informasi_booking', ['filter' => 'adminFilter']);
$routes->delete('/booking/hapus/(:num)', 'Admin::delete/$1');
$routes->delete('/akun/hapus/(:num)', 'Admin::delete_akun/$1');
$routes->post('/booking/konfirmasi/(:num)', 'Admin::konfirmasi/$1');
