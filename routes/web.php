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

Auth::routes();
Route::group(['middleware' => 'auth'], function(){
	Route::get('/admin', 'HomeController@dashboard')->name('dashboard');
	Route::resource('cursos', 'CursoController');
	Route::resource('subscriber', 'SubscriberController');
	Route::get('novedades', 'CursoController@indexNovedades');

});

Route::get('/','SitioController@home')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/{slug}', 'SitioController@showCurso')->name('show_post');
Route::get('/posts', 'SitioController@cursos')->name('all_posts');
Route::get('/contacto', 'SitioController@contacto')->name('contacto');
Route::post('/submit_form_contact', 'SitioController@sendContact')->name('submit_form_contact');
Route::get('/nosotros', 'SitioController@nosotros')->name('nosotros');
Route::get('/empresa-de-familia', 'SitioController@empresaDeFamilia')->name('empresa_de_familia');
Route::get('/mediacion', 'SitioController@mediacion')->name('mediacion');
Route::get('/negociacion', 'SitioController@negociacion')->name('negociacion');
Route::get('/arbitraje', 'SitioController@arbitraje')->name('arbitraje');
Route::post('/subscriber', 'SubscriberController@store')->name('subscriber');



