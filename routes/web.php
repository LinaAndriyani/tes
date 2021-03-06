<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/

Route::get('/', 'BerandaController@index');
Route::get('/beranda', 'BerandaController@index');
Route::get('/beranda/login', 'BerandaController@login');
Route::post('/beranda/cek_login', 'BerandaController@cek_login');
Route::get('/beranda/logout', 'BerandaController@logout');

Route::get('/user', 'UserController@home');
Route::get('/user/tambah_user', 'UserController@tambah_user');
Route::post('/user/proses_simpan', 'UserController@proses_simpan');
Route::get('/user/edit/{id_pengguna}', 'UserController@edit');
Route::post('/user/update_proses', 'UserController@update_proses');
Route::get('/user/hapus/{id_pengguna}', 'UserController@hapus_user');

Route::get('/admin', 'AdminController@index');
Route::post('/admin/cek_login', 'AdminController@cek_login');
Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::get('/admin/logout', 'AdminController@logout');
Route::post('/admin/simpan_user', 'AdminController@simpan_user');

