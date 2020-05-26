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
Route::get('/categories/{id}','FrontendController@categories')->name('categories');
Route::get('/post/{id}','FrontendController@post')->name('post');
Route::get('/newpost','FrontendController@newpost')->name('newpost');
Route::get('/user/{id}','FrontendController@user')->name('user');
Route::get('/search/{page?}','FrontendController@search')->name('search');
Route::get('/like/{likeable_id}/{type}','FrontendController@like')->name('like');
Route::get('/unlike/{likeable_id}/{type}','FrontendController@unlike')->name('unlike');

Route::post('/addpost','FrontendController@addpost')->name('addpost');
Route::post('/addcomment/{commentable_id}/{type}','FrontendController@addcomment')->name('addcomment');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
