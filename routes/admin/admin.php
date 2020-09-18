<?php
//后台路由
//路由分组
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('index','IndexController@index')->name('index');
});