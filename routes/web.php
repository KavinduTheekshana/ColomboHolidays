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

// ***************************Front End*******************************
Route::get('/', 'HomaPageController@index')->name('/');

Route::get('ContactUs', 'ContactUsController@index')->name('ContactUs');

Route::get('Gallery', 'GallaryController@index')->name('Gallery');

Route::get('AboutUs', 'AboutUsController@index')->name('AboutUs');

Route::get('News', 'NewsController@index')->name('News');

Route::get('FAQ', 'FAQController@index')->name('FAQ');

Route::get('PrivacyPolicy', 'PrivacyPolicyController@index')->name('PrivacyPolicy');


//*********************Auth****************** */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//**********************************Admin****************************** */
Route::get('/Dashboard', 'adminController@dashboard')->name('Dashboard');

Route::get('/BeautifulTrips', 'adminController@BeautifulTrips')->name('BeautifulTrips');

Route::get('/AddTestimonials', 'TestimonialsController@add')->name('AddTestimonials');
Route::post('/SaveTestimonials', 'TestimonialsController@save')->name('SaveTestimonials');
Route::get('/EditTestimonials', 'TestimonialsController@edit')->name('EditTestimonials');
Route::get('/MarkAsDisableTestimonials/{id}', 'TestimonialsController@MarkAsDisableTestimonials');
Route::get('/MarkAsActiveTestimonials/{id}', 'TestimonialsController@MarkAsActiveTestimonials');
Route::get('/DeleteTestimonials/{id}', 'TestimonialsController@DeleteTestimonials');
