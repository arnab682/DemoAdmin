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

Route::get('/', 'PublicController@inbox')->name('index');


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::prefix('user')->group(function(){
  Route::get('dashboard', 'UserController@dashboard')->name('userDashboard');
});

Route::prefix('admin')->group(function(){
  Route::get('dashboard', 'AdminController@dashboard')->name('adminDashboard');
  
});

Route::prefix('superadmin')->group(function(){
  Route::get('dashboard', 'SuperadminController@dashboard')->name('superadminDashboard');
  Route::get('userList', 'SuperadminController@users')->name('userListSuperadmin');
  Route::get('edituser/{id}/edit', 'SuperadminController@editUser')->name('editUserSuperadmin');
  	Route::post('editUser/{id}/edit', 'SuperadminController@editUserUpdate')->name('userUpdate');
  	Route::post('userdelete/{id}/delete', 'SuperadminController@deleteUser')->name('deleteUserSuperadmin');
});

