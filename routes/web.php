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

Route::get('/', 'CekreksController@index');
Route::get('phone', 'CekphonesController@index');
Route::get('login', 'LoginsController@index');
Route::get('register', 'RegistersController@index');
Route::get('dashboard', 'DashboardsController@index');
Route::get('report', 'ReportsController@index');
