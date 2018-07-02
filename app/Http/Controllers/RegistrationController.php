<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
  public function create () 
  {
    return view('/register');
  }

  public function store () 
  {

    $this->validate(request(), [
        'username' => 'required|min:4|max:20',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|max:30|confirmed'
    ]);

    User::create([
        'username' => request('username'),
        'email' => request('email'),
        'password' => bcrypt(request('password'))
    ]);

    return redirect()->route('login')->with('message','You can now log in to your account');
    
  }
}
