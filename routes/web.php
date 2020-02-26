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

Route::get('/', 'GalleryController@index');

Route::resource('gallery','GalleryController');
Route::resource('image','ImagesController');

Route::get('/image/create/{gallery_id}','ImagesController@create');
