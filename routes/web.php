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

Route::get('/', function () {
    return view('Home');
});

Route::get('/account', function () {
    return view('Account');
});

Route::get('/products', function () {
    return view('Products');
});

Route::get('/reporting', function () {
    return view('Reporting');
});