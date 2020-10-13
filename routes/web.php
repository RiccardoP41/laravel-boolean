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

Route::get('/', 'StaticPageController@home')->name("home");
Route::get('/chi-siamo', 'StaticPageController@chisiamo')->name("chisiamo");
Route::get('/studenti', 'StudentController@studenti')->name("studenti");
Route::get('/studenti/show/{id}', 'StudentController@show')->name("studenti.show");
Route::get('/studenti/{slug}', 'StudentController@slug')->name("studenti.slug");
