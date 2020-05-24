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
    return view('frontend.index');
});

Route::get('/','FrontendController@index')->name('home');
Route::get('/dashboard','FrontendController@dashboard')->name('dashboard');
Route::get('/categories','FrontendController@categories')->name('categories');
Route::get('/post','FrontendController@post')->name('post');
Route::get('/newPost','FrontendController@newPost')->name('newPost');
Route::get('/user','FrontendController@user')->name('user');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
