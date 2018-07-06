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

Route::patch('/room/{room}/posts/{post}', 'PostsController@update');
    
Route::delete('/room/{room}/comments/{comment}','CommentsController@destroy');

Route::post('/room/{room}/posts/{post}/comments','CommentsController@store');


Route::get('/profile/{user}', 'ProfileController@show')->name('profile');

Route::get('/profile/{user}/edit', 'ProfileController@edit');
Route::patch('/profile/{user}/', 'ProfileController@update');

