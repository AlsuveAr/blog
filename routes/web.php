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

Route::redirect('/', 'blog');

Auth::routes();

//Web
Route::get('/blog', 'Web\PageController@blog')->name('blog');
Route::get('/blog/{slug}', 'Web\PageController@post')->name('post');
Route::get('/acerca-de', 'Web\PageController@about')->name('about');
Route::get('/archivos', 'Web\PageController@archive')->name('archive');
Route::get('/contacto', 'Web\PageController@contact')->name('contact');


Route::get('/categoria/{slug}', 'Web\PageController@category')->name('category');
Route::get('/etiqueta/{slug}', 'Web\PageController@tag')->name('tag');


//admin
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/home', 'HomeController@index')->name('dashboard');
Route::resource('posts', 'Admin\PostController');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('tags', 'Admin\TagController');