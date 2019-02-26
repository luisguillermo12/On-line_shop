<?php

Route::get('detailpost/{id}', 'HomeController@show')->name('postdetails');

Route::get('/register/verify/{code}', 'Auth\RegisterController@verify');
Route::get('/User/Profile/{id}', 'Auth\UserController@profile')->name('UserProfile');
Route::get('/User/RecodeVerify/{id}','Auth\UserController@re_code_verify' )->name('ReCodeVeryUser');
Route::get('/User/ConfirmationCode/{code}','Auth\UserController@verify_code' )->name('ReCodeVeryUser_2');



Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/ToPost', 'Publications\ToPostController');

Route::get('/ShoppingCartAdd/User/Publications', 'ShoppingCart\ShoppingCartController@index')->name('PublicationsShoppingCart');
Route::get('/ShoppingCartAdd/{id}', 'ShoppingCart\ShoppingCartController@add')->name('ShoppingCartAdd');
Route::get('/ShoppingCartrepeat/{id}', 'ShoppingCart\ShoppingCartController@inthecart')->name('ShoppingCartrepeat');


Route::get('/User/Changepassword/{id}', 'Auth\UserController@changepassword')->name('UserProfileChangePasword');
Route::post('/User/UpdatePassword/{id}', 'Auth\UserController@updatepassword')->name('UsersUpdatePassword');
Route::get('/User/Edit/{id}', 'Auth\UserController@edituser')->name('UserEdit');
Route::post('/User/Update/{id}', 'Auth\UserController@update')->name('UserUpdate');
Route::get('/User/Desactivate/{id}', 'Auth\UserController@desactivate')->name('UserDesactivate');
Route::get('/User/Activate/{id}', 'Auth\UserController@Activate')->name('UserActivate');





