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

Route::get('/', ['as' => 'user.home', function () {
    
    return redirect()->route('index');
   
}]);
Route::get('/home', ['as'=>'index','uses'=>'HomeController@index']);

Route::get('/image' ,['as'=>'categories.1','uses'=>'HomeController@showCompanyImage']);

Route::get('/video' ,['as'=>'categories.2','uses'=>'HomeController@showVideo']);

Route::get('/blog' ,['as'=>'categories.3','uses'=>'HomeController@showBlog']);

Route::get('/blog-detail/{alias}' ,['as'=>'show.blog.detail','uses'=>'HomeController@showBlogdetail']);

Route::get('/our-dream' ,['as'=>'categories.4','uses'=>'HomeController@ourDream']);

Route::get('/dream-detail/{alias}' ,['as'=>'dream.detail','uses'=>'HomeController@dreamDetail']);

Route::get('/project' ,['as'=>'categories.5','uses'=>'HomeController@showProject']);


Route::get('/application' ,['as'=>'categories.9','uses'=>'HomeController@showApp']);

Route::get('/contact' ,['as'=>'categories.10','uses'=>'HomeController@contact']);
Route::get('/application/{alias}' ,['as'=>'show.app.detail','uses'=>'HomeController@showAppdetail']);

Route::get('/project/{alias}' ,['as'=>'show.project.detail','uses'=>'HomeController@showProjectDetail']);

Route::get('get-banner',['as'=>'ajaxGetBanner','uses'=>'HomeController@getBanner']);

Route::group([ 'middleware' => 'auth'], function () {
	Route::get(config('quickadmin.homeRoute'), 'QuickadminController@index');
    Route::group([ 'middleware' => 'role'], function () {
        // Menu routing
        Route::get(config('quickadmin.route') . '/menu', [
            'as' => 'menu',
            'uses' => 'QuickadminMenuController@index'
        ]);
        Route::post(config('quickadmin.route') . '/menu', [
            'as' => 'menu',
            'uses' => 'QuickadminMenuController@rearrange'
        ]);

        Route::get(config('quickadmin.route') . '/menu/edit/{id}', [
            'as' => 'menu.edit',
            'uses' => 'QuickadminMenuController@edit'
        ]);
        Route::post(config('quickadmin.route') . '/menu/edit/{id}', [
            'as' => 'menu.edit',
            'uses' => 'QuickadminMenuController@update'
        ]);
  
            Route::get(config('quickadmin.route') . '/menu/crud', [
                'as' => 'menu.crud',
                'uses' => 'QuickadminMenuController@createCrud'
            ]);
            Route::post(config('quickadmin.route') . '/menu/crud', [
                'as' => 'menu.crud.insert',
                'uses' => 'QuickadminMenuController@insertCrud'
            ]);

            Route::get(config('quickadmin.route') . '/menu/parent', [
                'as' => 'menu.parent',
                'uses' => 'QuickadminMenuController@createParent'
            ]);
            Route::post(config('quickadmin.route') . '/menu/parent', [
                'as' => 'menu.parent.insert',
                'uses' => 'QuickadminMenuController@insertParent'
            ]);

            Route::get(config('quickadmin.route') . '/menu/custom', [
                'as' => 'menu.custom',
                'uses' => 'QuickadminMenuController@createCustom'
            ]);
            Route::post(config('quickadmin.route') . '/menu/custom', [
                'as' => 'menu.custom.insert',
                'uses' => 'QuickadminMenuController@insertCustom'
            ]);
  
        Route::get(config('quickadmin.route') . '/actions', [
            'as' => 'actions',
            'uses' => 'UserActionsController@index'
        ]);
        Route::get(config('quickadmin.route') . '/actions/ajax', [
            'as' => 'actions.ajax',
            'uses' => 'UserActionsController@table'
        ]);
    });
});


// @todo move to default routes.php
Route::group([
    'middleware' => ['web']
], function () {
    // Point to App\Http\Controllers\UsersController as a resource
    Route::group([
        'middleware' => 'role'
    ], function () {
        Route::resource('users', 'UsersController');
        Route::resource('roles', 'RolesController');
    });
    Route::auth();
});


use Illuminate\Support\Facades\View;
use Laraveldaily\Quickadmin\Models\Menu;

if (Schema::hasTable('menus')) {
    $menus = Menu::with('children')->where('menu_type', '!=', 0)->orderBy('position')->get();
    View::share('menus', $menus);
    if (! empty($menus)) {
        Route::group([
            'middleware' => ['web', 'auth', 'role'],
            'prefix'     => config('quickadmin.route'),
            'as'         => config('quickadmin.route') . '.',
        ], function () use ($menus) {
            foreach ($menus as $menu) {
                switch ($menu->menu_type) {
                    case 1:
                        Route::post(strtolower($menu->name) . '/massDelete', [
                            'as'   => strtolower($menu->name) . '.massDelete',
                            'uses' => 'Admin\\' . ucfirst(camel_case($menu->name)) . 'Controller@massDelete'
                        ]);
                        Route::resource(strtolower($menu->name),
                            'Admin\\' . ucfirst(camel_case($menu->name)) . 'Controller', ['except' => 'show']);
                        break;
                    case 3:
                        Route::get(strtolower($menu->name), [
                            'as'   => strtolower($menu->name) . '.index',
                            'uses' => 'Admin\\' . ucfirst(camel_case($menu->name)) . 'Controller@index',
                        ]);
                        break;
                }
            }
        });
    }
}
