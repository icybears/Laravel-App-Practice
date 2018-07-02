<?php



Route::get('/', function () {
    return view('layouts.landing');
});


Route::get('/register', function() {
    return view('register');
});

Route::get('/login', function() {
    return view('login');
});