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

Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product/{id}/gallery','ProductController@gallery')->name('product-gallery');
Route::get('/transaction/{id}/set-status','TransactionController@setStatus')->name('transaction-status');
Route::resource('/product', 'ProductController');
Route::resource('/product-galleries', 'ProductGalleryController');
Route::resource('/transaction', 'TransactionController');

Auth::routes(['register' => false]);

