<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Room;

class RegistrationController extends Controller
{

  public function __construct ()
  {
    $this->middleware('guest');
  }

  public function create () 
  {
    return view('/register');
  }

  public function store () 
  {

    $this->validate(request(), [
        'username' => 'required|min:4|max:20|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|max:30|confirmed'
    ]);
    

    $user = User::create([
        'username' => request('username'),
        'email' => request('email'),
        'password' => bcrypt(request('password'))
    ]);

    // SHOULD REFACTOR THIS
    $user_assigned_room = Room::create(['user_id' => $user->id]);

    DB::table('users')->where('id', $user->id)
                      ->update(['room_id' => $user_assigned_room->id]);

    return redirect()->route('login')->with('message','You can now log in to your account');
    
  }
}
