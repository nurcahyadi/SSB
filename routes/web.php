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
//     // return view('viewadmin.home');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/login', 'HomeController@home')->name('home');
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/gallery', 'HomeController@gallery')->name('gallery');
Route::get('/daftar', 'HomeController@daftar')->name('daftar');
Route::get('/profpemain', 'HomeController@profpemain')->name('profpemain');
Route::get('/profpelatih', 'HomeController@profpelatih')->name('profpelatih');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/homeadmin','UserController@index')->name('homeadmin')->middleware('auth');
Route::get('/homepembayaran','TransaksiController@index')->name('homepembayaran');

Route::post('/pendaftaran','UserController@store');
Route::get('/pembayaran','TransaksiController@create');
Route::post('/statuspembayaran','TransaksiController@store')->name('statuspembayaran');


// Route::resource('admin','UserController');
