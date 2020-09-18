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
    return view('welcome');
});
//使用引入文件前
//Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
//    Route::get('index','IndexController@index')->name('index');
//});
//使用引入文件后
include base_path('routes/admin/admin.php');