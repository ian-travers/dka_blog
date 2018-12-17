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
    return view('welcome');
});

/* Коротная запись Route::view */
//Route::view('/', 'welcome');

Route::get('category+{name?}', function ($name = null) {
    echo $name ? 'Category name = ' . $name : 'Category has no name!';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
