<?php



Route::get('/','HomeController@index')->name('home');

// REGISTER
Route::get('/register','RegistrationController@create')->name('register');
Route::post('/register','RegistrationController@store');
////////

// LOGIN
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
/////////

// LOGOUT
Route::get('/logout', 'SessionsController@destroy')->name('logout');
/////////

Route::get('/room/{room}', 'RoomsController@show')->name('room');

Route::post('/room/{room}/posts', 'PostsController@store');

Route::delete('/room/{room}/posts/{post}', 'PostsController@destroy');
    

Route::post('/room/{room}/posts/{post}/comments','CommentsController@store');

