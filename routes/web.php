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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('/profile-create', 'DashboardController@create')->name('profile-create');
Route::post('/profile-add', 'DashboardController@store')->name('profile-add');
Route::get('/profile-update/{id}', 'DashboardController@edit')->name('profile-update');
Route::post('/profile-edit/{id}', 'DashboardController@update')->name('profile-edit');
Route::get('/profile-delete/{id}', 'DashboardController@destroy')->name('profile-delete');
