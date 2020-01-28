<?php
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){
    
    Route::get('/', 'Admin\DashboardController@index')->name('admin');
    
    //berita
    Route::Resource('/berita', 'Admin\BeritaController');

    //kategori
    route::Resource('/kategori','Admin\KategoriController');
    
    //user
    route::Resource('/user','Admin\UserController');
});

