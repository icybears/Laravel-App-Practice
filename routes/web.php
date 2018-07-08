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

// ROOMS
Route::get('/rooms', 'RoomsController@index' );

Route::get('/room/{room}', 'RoomsController@show')->name('room');
////////

// POSTS
Route::get('/room/{room}/posts/{post}', 'PostsController@show');

Route::post('/room/{room}/posts', 'PostsController@store');

Route::delete('/room/{room}/posts/{post}', 'PostsController@destroy');

Route::patch('/room/{room}/posts/{post}', 'PostsController@update');
/////////

// COMMENTS
Route::delete('/room/{room}/posts/{post}/comments/{comment}','CommentsController@destroy');

Route::post('/room/{room}/posts/{post}/comments','CommentsController@store');

Route::patch('/room/{room}/posts/{post}/comments/{comment}','CommentsController@update');
////////////

// PROFILE
Route::get('/profile/{user}', 'ProfileController@show')->name('profile');

Route::get('/profile/{user}/edit', 'ProfileController@edit');

Route::patch('/profile/{user}/', 'ProfileController@update');
///////////


