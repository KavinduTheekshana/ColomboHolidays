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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomaPageController@index')->name('/');

Route::get('ContactUs', 'ContactUsController@index')->name('ContactUs');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Dashboard', 'adminController@dashboard')->name('Dashboard');

Route::get('/BeautifulTrips', 'adminController@BeautifulTrips')->name('BeautifulTrips');
