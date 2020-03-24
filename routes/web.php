<?php


Route::get('/','guestController@index')->name('index');
Route::post('/guest','guestController@store');
Route::get('/about', function () {
    return view('user.about');
});

Route::get('/gallery','guestController@gallery')->name('gallery');

Auth::routes();
// admin Controller route
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/content/index','adminController@index')->name('content');
Route::post('/admin/content/insert','adminController@store')->name('insert');
Route::get('/admin/content/insert','adminController@create')->name('upload');
Route::get('/delete/{id}','adminController@destroy');
Route::get('/edit/{id}','adminController@edit')->name('edit');
Route::post('/update/{id}','adminController@update')->name('update');
Route::get('/admin/order/index','adminController@order')->name('order');
Route::get('/deleteuser/{id}','adminController@deleteuser')->name('deleteuser');
Route::get('/deletemsg/{id}','adminController@deleteuser')->name('deletemsg');
Route::get('/admin/add/index','adminController@add')->name('add');
Route::get('/admin/guest','adminController@msg')->name('msg');
Route::get('/deleteguestmsg/{id}','adminController@deleteguestmsg')->name('deleteguestmsg');
Route::post('/saveComment','adminController@updateOrderComment');
// end route admin
Route::get('/profile','profileController@index')->name('profile');
Route::get('/reservation','profileController@create')->name('reser');
Route::post('/reservation','profileController@update')->name('reserupdate');
Route::get('/reservation/{id}','profileController@destroy')->name('deleteorder');


