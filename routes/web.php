<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');


Route::get('/admin', 'App\Http\Controllers\DashboardController@admin');
Route::get('/user', 'App\Http\Controllers\DashboardController@user');

// produk
Route::get('/produk', 'App\Http\Controllers\ProdukController@show');
Route::get('/getproduk', 'App\Http\Controllers\ProdukController@getproduk');

// Outlet
Route::get('/outlet', 'App\Http\Controllers\OutletController@show');
Route::get('/getoutlet', 'App\Http\Controllers\OutletController@getoutlet');