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

Route::get('/room/{room}/edit', 'RoomsController@edit');

Route::patch('/room/{room}/edit', 'RoomsController@update')->middleware('throttle:10,1');

Route::get('/room/{room}/subscribe', 'RoomsController@subscribe')->middleware('throttle:50,1');

Route::get('/room/{room}/unsubscribe', 'RoomsController@unsubscribe')->middleware('throttle:50,1');

Route::get('/rooms/search', 'RoomsController@search');

////////

// POSTS
Route::get('/room/{room}/posts/{post}', 'PostsController@show');



Route::post('/room/{room}/posts', 'PostsController@store')->middleware('throttle:10,1');


Route::delete('/room/{room}/posts/{post}', 'PostsController@destroy')->middleware('throttle:20,1');

Route::patch('/room/{room}/posts/{post}', 'PostsController@update')->middleware('throttle:10,1');
/////////

// COMMENTS
Route::delete('/room/{room}/posts/{post}/comments/{comment}','CommentsController@destroy')->middleware('throttle:20,1');

Route::post('/room/{room}/posts/{post}/comments','CommentsController@store')->middleware('throttle:15,1');

Route::patch('/room/{room}/posts/{post}/comments/{comment}','CommentsController@update')->middleware('throttle:10,1');
////////////

// PROFILE
Route::get('/profile/{user}', 'ProfileController@show')->name('profile');

Route::get('/profile/{user}/edit', 'ProfileController@edit');

Route::patch('/profile/{user}/', 'ProfileController@update')->middleware('throttle:10,1');
///////////

// ACTIVITY
Route::get('/activity/posts/recent','ActivityController@recentPosts');

Route::get('/activity/posts/top','ActivityController@topPosts');

Route::get('activity/posts/active','ActivityController@activePosts');
////////////


// ACCOUNT

Route::get('/account','AccountController@index');

Route::patch('/account/email','AccountController@changeEmail')->middleware('throttle:5,1');

Route::patch('/account/password', 'AccountController@changePassword')->middleware('throttle:5,1');


