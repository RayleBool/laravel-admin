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

Route::get('/admin', function () {
    return view('backend.layouts.admin');
});

Route::group(['namespace' => 'Backend'], function() {
    Route::get('/login', [
        'uses'      => 'LoginController@login',
        'as'        => 'backend.login'
    ]);

    Route::get('/index', [
        'uses'      => 'IndexController@index',
        'as'        => 'backend.index'
    ]);

    Route::get('/user/index', [
        'uses'      => 'UserController@index',
        'as'        => 'backend.user.index'
    ]);


     Route::get('/group/index', [
        'uses'      => 'GroupController@index',
        'as'        => 'backend.group.index'
    ]);

      Route::get('/group/member', [
        'uses'      => 'GroupController@groupMember',
        'as'        => 'backend.group.member'
    ]);
});
