<?php

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

Route::get('/', 'Index@index');
Route::get('/register', 'Customer@register');
Route::post('/loginPost', 'Customer@loginPost');
Route::post('/registerPost', 'Customer@registerPost');
Route::get('/logout', 'Customer@logout');
Route::get('/editProfile', 'Customer@editProfile');
Route::post('/editProfilePost', 'Customer@editProfilePost');
Route::get('/product/detail/{id}', 'Product@detail');
Route::post('/cart/add/{id}', 'Cart@add');
Route::get('/cart', 'Cart@show');
Route::get('/cart/delete/{id}', 'Cart@delete');
Route::get('/checkout', 'TransactionHeader@checkout');
Route::post('/transactions/add', 'TransactionHeader@add');
Route::get('/transactions/addDetails/{id}', 'TransactionDetail@add');
Route::get('/transactions/view', 'TransactionHeader@view');
Route::get('/transactions/confirm/{id}', 'TransactionHeader@confirm');
Route::get('/transactions/accept/{id}', 'TransactionHeader@accept');
Route::get('/transactions/deny/{id}', 'TransactionHeader@deny');
Route::get('/product/type/{id}', 'Product@viewByType');
Route::get('/product/from/{id}', 'Product@viewByProvince');
Route::get('/explore', 'Province@view');
Route::get('/province/detail/{id}', 'Province@detail');
Route::get('/contact', 'Index@contact');
Route::get('/product/search/', 'Product@search');
