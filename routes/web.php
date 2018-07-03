<?php



Route::get('/','HomeController@index')->name('home');


Route::get('/register','RegistrationController@create')->name('register');
Route::post('/register','RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');

Route::get('/room/{room}', 'RoomsController@show');

Route::post('/room/{room}', 'PostsController@store');

