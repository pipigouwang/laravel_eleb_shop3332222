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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::resource('/shops','ShopController');
Route::redirect('/','shops');

//修改
Route::patch('/editInfo/{shopuser}', 'ShopUserController@editInfo')->name('editInfo');
Route::patch('/editPwd/{shopuser}', 'ShopUserController@editPwd')->name('editPwd');


//登录
Route::get('login', 'SessionController@login')->name('login');
Route::post('login', 'SessionController@store')->name('login');
Route::delete('logout', 'SessionController@logout')->name('logout');