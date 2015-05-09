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
        Route::resource('groups.badges','BadgesGroupsController',['except' => ['index','show']]);
        Route::resource('users.badges','BadgesUsersController',['except' => ['index','show']]);
        Route::resource('users.groups','GroupsUsersController',['except' => ['index','show']]);
        Route::resource('users','UsersController',['except' => ['index','show']]);
        Route::resource('groups','GroupsController',['except' => ['index','show']]);
        Route::resource('badges','BadgesController',['except' => ['index','show']]);
    });
    Route::resource('users.badges','BadgesUsersController',['only' => ['index','show']]);
    Route::resource('groups.badges','BadgesGroupsController',['only' => ['index','show']]);
    Route::resource('users.groups','GroupsUsersController',['only' => ['index','show']]);
    Route::resource('users', 'UsersController',['only' => ['index','show']]);
    Route::resource('groups', 'GroupsController',['only' => ['index','show']]);
    Route::resource('badges', 'BadgesController',['only' => ['index','show']]);


});

