<?php

// Route::get('/', function () {
    // return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix'=>'apps','middlewere'=>['auth','apps']],function(){
    Route::get('/','Apps\DashboardController@index')->name('apps');
});

