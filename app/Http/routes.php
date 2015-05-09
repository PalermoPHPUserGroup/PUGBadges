<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['prefix'=>'v1'],function() {

    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);


    Route::group(['middleware' => 'auth'], function () {
        Route::resource('groups.badges','BadgesGroupsController',['except' => ['show']]);
        Route::resource('users.badges','BadgesUsersController',['except' => ['show']]);
        Route::resource('users.groups','GroupsUsersController',['except' => ['show']]);
        Route::resource('users','UsersController',['except' => ['show']]);
        Route::resource('groups','GroupsController',['except' => ['show']]);
        Route::resource('badges','BadgesController',['except' => ['show']]);
    });
    Route::resource('users.badges','BadgesUsersController',['only' => ['show']]);
    Route::resource('groups.badges','BadgesGroupsController',['only' => ['show']]);
    Route::resource('users.groups','GroupsUsersController',['only' => ['show']]);
    Route::resource('users', 'UsersController',['only' => ['show']]);
    Route::resource('groups', 'GroupsController',['only' => ['show']]);
    Route::resource('badges', 'BadgesController',['only' => ['show']]);


});

