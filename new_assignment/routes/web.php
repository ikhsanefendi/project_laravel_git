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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('admin', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
// Route::get('add_guru', 'AdminController@form_add_guru')->name('admin.home')->middleware('is_admin');
// Route::post('simpan_guru', 'AdminController@save_guru')->name('admin.home')->middleware('is_admin');
Route::get('hapus_guru/{id}', 'AdminController@delete_guru')->name('admin.delete')->middleware('is_admin');
// Route::get('update_guru/{id}', 'AdminController@update_guru')->name('admin.home')->middleware('is_admin');
// Route::post('edit_guru/{id}', 'AdminController@edit_guru')->name('admin.home')->middleware('is_admin');

Route::get('dashboard','HomeController@index');
Route::get('add','HomeController@form_add');
Route::POST('simpan','HomeController@save');
Route::GET('hapus/{id}','HomeController@delete');
Route::get('update/{id}','HomeController@form_edit');
Route::post('edit/{id}','HomeController@edit');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
