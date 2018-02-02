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

Route::get('test')->uses('CommonController@test');
Route::get('/')->uses('CommonController@index')->name('home');
Route::any('login')->uses('LoginController@view')->name('login');//登陆
Route::get('logout')->uses('LoginController@logout')->name('logout');//登出
Route::get('menu')->uses('CommonController@menu')->name('menu');//操作菜单
Route::get('welcome')->uses('CommonController@welcome')->name('welcome');//欢迎页
Route::group([], function (){
    Route::any('user/list')->uses('UserController@lists')->name('user.list');//用户列表
    Route::any('user/edit')->uses('UserController@edit')->name('user.edit');//用户编辑
    Route::any('user/add')->uses('UserController@add')->name('user.add');//用户添加
    Route::post('user/del')->uses('UserController@del')->name('user.del');//用户删除
    Route::any('user/pass')->uses('UserController@pass')->name('user.pass');//用户修改密码
});