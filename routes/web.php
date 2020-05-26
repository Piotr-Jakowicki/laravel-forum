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
Route::get('/posts/{id}','FrontendController@posts')->name('posts');
Route::get('/post/{id}','FrontendController@post')->name('post');
Route::get('/newpost','FrontendController@newpost')->name('newpost');
Route::get('/user/{id}','FrontendController@user')->name('user');
Route::get('/search/{page?}','FrontendController@search')->name('search');
Route::get('/like/{likeable_id}/{type}','FrontendController@like')->name('like');
Route::get('/unlike/{likeable_id}/{type}','FrontendController@unlike')->name('unlike');

Route::post('/addpost','FrontendController@addpost')->name('addpost');
Route::post('/addcomment/{commentable_id}/{type}','FrontendController@addcomment')->name('addcomment');

Route::group(['prefix'=>'dashboard', 'middleware'=>'auth'], function(){
    Route::get('/','BackendController@index')->name('dashboard');
    Route::get('/settings','BackendController@settings')->name('settings');
    Route::get('/categories','BackendController@categories')->name('categories');
    Route::get('/tags','BackendController@tags')->name('tags');
    Route::get('/banned','BackendController@banned')->name('banned');
    Route::get('/profile','BackendController@profile')->name('profile');
    Route::resource('/categories','CategoryController');
});

Auth::routes();