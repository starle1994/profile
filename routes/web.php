<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['as'=>'index','uses'=>'HomeController@index']);

Route::get('/image' ,['as'=>'categories.1','uses'=>'HomeController@showCompanyImage']);

Route::get('/video' ,['as'=>'categories.2','uses'=>'HomeController@showVideo']);

Route::get('/blog' ,['as'=>'categories.3','uses'=>'HomeController@showBlog']);

Route::get('/blog-detail/{alias}' ,['as'=>'show.blog.detail','uses'=>'HomeController@showBlogdetail']);

Route::get('/our-dream' ,['as'=>'categories.4','uses'=>'HomeController@showCompanyImage']);

Route::get('/contact' ,['as'=>'categories.5','uses'=>'HomeController@contact']);

Route::get('/app/{alias}' ,['as'=>'show.app.detail','uses'=>'HomeController@showAppdetail']);