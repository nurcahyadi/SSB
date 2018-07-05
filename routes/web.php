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
Route::get('caripembayaran','TransaksiController@search')->name('caripembayaran');
Route::get('/', 'HomeController@home')->name('home');
Route::get('/gallery', 'HomeController@gallery')->name('gallery');
Route::get('/daftar', 'HomeController@daftar')->name('daftar');
Route::get('/profpemain', 'HomeController@profpemain')->name('profpemain');
Route::get('/profpelatih', 'HomeController@profpelatih')->name('profpelatih');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/homeadmin','UserController@index')->name('homeadmin')->middleware('auth');
Route::get('/homepembayaran','TransaksiController@index')->name('homepembayaran');
Route::get('/show/{id}','UserController@show')->name('detailuser');
Route::get('/tampiledit/{id}','UserController@edit')->name('useredit');
Route::get('/tampiledittransaksi/{id}','TransaksiController@edit')->name('transaksiedit');



Route::put('/edit/{id}','UserController@update')->name('updateuser');
Route::put('/update/{id}','TransaksiController@update')->name('updatetransaksi');
Route::put('/status/{id}','UserController@konfirmasi')->name('konfirmasi');

Route::post('/pendaftaran','UserController@store');
Route::get('/pembayaran','TransaksiController@create');
Route::post('/statuspembayaran','TransaksiController@store')->name('statuspembayaran');

Route::delete('/delete/{id}','UserController@destroy')->name('hapususer');



Route::get('/homegalleryadmin','GalleryController@index')->name('homegalleryadmin')->middleware('auth');
Route::get('/togallery','GalleryController@create');
Route::put('/creategallery','GalleryController@store')->name('creategallery');
Route::get('/galleryshow/{id}','GalleryController@show')->name('detailgallery');
Route::get('/editgallery/{id}','GalleryController@edit')->name('editgallery');
Route::put('/updategallery/{id}','GalleryController@update')->name('updategallery');
Route::delete('/deletegallery/{id}','GalleryController@destroy')->name('deletegallery');

Route::get('/homepelatihadmin','UserController@indexpelatih')->name('homepelatihadmin')->middleware('auth');
Route::get('/topelatih','UserController@createpelatih');
Route::post('/createpelatih','UserController@storepelatih')->name('createpelatih');
Route::get('/pelatihshow/{id}','UserController@showpelatih')->name('detailpelatih');
Route::get('/editpelatih/{id}','UserController@editpelatih')->name('editpelatih');
Route::post('/updatepelatih/{id}','UserController@updatepelatih')->name('updatepelatih');
Route::delete('/deletepelatih/{id}','UserController@destroypelatih')->name('deletepelatih');

Route::get('/homeaboutadmin','PrestasiController@index')->name('homeaboutadmin')->middleware('auth');
Route::get('/toabout','PrestasiController@create');
Route::put('/createabout','PrestasiController@store')->name('createabout');
Route::get('/aboutshow/{id}','PrestasiController@show')->name('detailabout');
Route::get('/editabout/{id}','PrestasiController@edit')->name('editabout');
Route::put('/updateabout/{id}','PrestasiController@update')->name('updateabout');
Route::delete('/deleteabout/{id}','PrestasiController@destroy')->name('deleteabout');



Route::get('/homepemainadmin','UserController@index')->name('homepemainadmin')->middleware('auth');
// Route::resource('admin','UserController');
