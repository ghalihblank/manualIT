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

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::get('/', 'mainController@widget')->name('dashboard');

    //manajemen ROLE + USER
    Route::resource('/role', 'RoleController')->except([
        'create', 'show', 'edit', 'update'
    ]);

    Route::resource('/users', 'UserController')->except([
        'show'
    ]);

    Route::get('/users/roles/{id}', 'UserController@roles')->name('users.roles');
    Route::post('/users/roles/{id}', 'UserController@setRole')->name('users.setrole');

    Route::post('/users/permission', 'UserController@addPermission')->name('users.add_permission');
    Route::get('/users/role-permission', 'UserController@rolePermission')->name('users.roles_permission');

    Route::put('/users/permission/{role}', 'UserController@setRolePermission')->name('users.setRolePermission');
    //------------------------------------------------------------------------------------

    //menu sidebar
    Route::get('/sp01', 'spController@sp01')->name('sp01');
    route::get('/sp01/filter', 'spController@sp01filter');

    Route::get('/sp03', 'spController@sp03')->name('sp03');
    Route::get('/sp03/proses', 'spController@sp03proses');
    //-------------------------------------------------------------------------------------

}); 

Route::get('/logout', function(){
    Auth::logout();
    Session::flush();
    return Redirect::to('/login');
});






