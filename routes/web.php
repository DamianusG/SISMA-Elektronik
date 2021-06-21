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

Route::get('/', 'HomeController@index')->name('main');

Route::get('/login', function () {
    return view('pages.login');
});

Route::resource('barang','ControllerBarang');

Auth::routes(['register'=>false]);

Route::get('logout', 'Auth\LoginController@logout');



// Route::get('/home', 'HomeController@index')->name('home');
