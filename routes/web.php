<?php

Route::get('/', function () {
    return view('user.index');

});
Route::get('/about', function () {
    return view('user.about');
});
Route::get('/gallery', function () {
    return view('user.gallery');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/content/index','adminController@index')->name('content');
Route::post('/admin/content/insert','adminController@store')->name('insert');
Route::get('/admin/content/insert','adminController@create')->name('upload');
Route::get('/delete/{id}','adminController@destroy');
Route::get('/edit/{id}','adminController@edit')->name('edit');
Route::post('/update/{id}','adminController@update')->name('update');
Route::get('/admin/order/index','adminController@order')->name('order');
