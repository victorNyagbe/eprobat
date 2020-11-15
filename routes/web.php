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

Route::get('/', 'MainController@home')->name('eprobat.home');

Route::get('/nos-activites', 'MainController@activities')->name('eprobat.activites');

Route::get('/nos-realisations', 'MainController@realisations')->name('eprobat.realisations');

Route::get('/contact', 'MainController@contact')->name('eprobat.contact');
